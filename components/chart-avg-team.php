<!-- Find Chart Step No. to skip through the shiet  -->

<script>
/*

Chart Step No. 1. DATASETUP - JSON format
  Each object represents aan employee.

  `name` has to contains the name of the team member. needed for axis labeling
  `department` is department where member belongs
  `items` are instances of data under the member
    each item will have the following properties
      `Task Cat Title`: category
      `duration`: decimal percentage of hours to total (should be more than 0 but less than or equal to 1)

  If structure is not possible, let me know so I can modify the script
  */

var placeholderData = [
  {
    "name": "Cristian R",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .20
      },
      {
        "task_cat":"Software Development",
        "duration": .30
      },
      {
        "task_cat":"Internal Project Development",
        "duration": .35
      },
      {
        "task_cat":"Email Inbox Management",
        "duration": .15
      }
    ]
  },
  {
    "name": "Sam Z",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .40
      },
      {
        "task_cat":"Software Development",
        "duration": .20
      },
      {
        "task_cat":"Bugherds",
        "duration": .20
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .20
      }
    ]
  },
  {
    "name": "Nadia R",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .69
      },
      {
        "task_cat":"Software Development",
        "duration": .01
      },
      {
        "task_cat":"Bugherds",
        "duration": .10
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .20
      }
    ]
  },
  {
    "name": "Mark S",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .25
      },
      {
        "task_cat":"Software Development",
        "duration": .25
      },
      {
        "task_cat":"Bugherds",
        "duration": .25
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .25
      }
    ]
  },


  {
    "name": "Jenna E",
    "department": "designers",
    "items": [
      {
        "task_cat":"Client Homepage Design",
        "duration": .75
      },
      {
        "task_cat":"Client Internal Page Design",
        "duration": .05
      },
      {
        "task_cat":"Meetings",
        "duration": .01
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .09
      },
      {
        "task_cat":"Bugherds",
        "duration": .01
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .04
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .05
      }
    ]
  },
  {
    "name": "Stacy W",
    "department": "designers",
    "items": [
      {
        "task_cat":"Client Homepage Design",
        "duration": .20
      },
      {
        "task_cat":"Client Internal Page Design",
        "duration": .10
      },
      {
        "task_cat":"Meetings",
        "duration": .40
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .14
      },
      {
        "task_cat":"Bugherds",
        "duration": .15
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .005
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .005
      }
    ]
  },


  {
    "name": "Alana R.",
    "department": "seo",
    "items": [
      {
        "task_cat":"Link Building",
        "duration": .20
      },
      {
        "task_cat":"On-Page SEO",
        "duration": .10
      },
      {
        "task_cat":"Research",
        "duration": .40
      },
      {
        "task_cat":"Campaign Analysis",
        "duration": .10
      },
      {
        "task_cat":"Website Content Posts",
        "duration": .05
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .05
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .1
      }
    ]
  },

  {
    "name": "Adam H.",
    "department": "seo",
    "items": [
      {
        "task_cat":"Link Building",
        "duration": .20
      },
      {
        "task_cat":"On-Page SEO",
        "duration": .10
      },
      {
        "task_cat":"Research",
        "duration": .22
      },
      {
        "task_cat":"Campaign Analysis",
        "duration": .18
      },
      {
        "task_cat":"Website Content Posts",
        "duration": .1
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .1
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .1
      }
    ]
  },



];
</script>

<!-- 
Chart Step No. 2. + D3 Library + DOM ELEMENT
an element with a unique id to render the graph to. add color and background helpers for more fancyness as desired. chart markup should look like this: 
 -->
<script src="https://d3js.org/d3.v6.js"></script>
<div id="analytics-chart" class="background-theme color-theme"></div>
<!-- 
Chart Step No 3. Script that must be copy pasted
this is the hellhole. Copy everything in the following script tag and paste where needed
-->
<script>

// Chart Step No. 3. SCRIPT MINI LIBRARY
//////////////////////////////START COPY HERE//////////////////////////////
"use strict";
  (function(window){
    const WorkflowBarChart = function(selector,incomingData,department){


      if (!selector || !incomingData ){
        return false;
      }

      this.selector = selector;
      this.data = [];

      this.barHeight = 32;
      this.width = 1280;
      this.padding = [20,10,10,75];

      this.transition = d3.transition()
        .duration( 500)
        ;

      this.init = ()=> {

        //select the dootdoot and set it up for the svg that will bear our bois
        this.container = d3.select(this.selector)
          .html('');

        this.svgWrapper = this.container.append('div');

        //append svg where we render the bois
        this.svg  = this.svgWrapper.append('svg')
            .style('position','absolute')
            .style('top','0')
            .style('left','0')
            .style('bottom','0')
            .style('right','0')
            .attr('font-size','1em')
            .attr('font-family','inherit')
            .attr('color','inherit')
            .style('line-height',1)
            .style('margin','auto')
            .attr('version','1.1')
            .attr('x','0px')
            .attr('y','0px')
            .attr("preserveAspectRatio", "xMidYMid meet") //responsive
            .attr('xml:space','preserve')
            ;

        

        this.legends = this.container.append('div')
          .attr('class','flex-grid flex-grid-fixed flex-grid-compact');

        
        this.yAxis = this.svg.append('g')
          .attr("transform", `translate(${this.padding[3]},0)`)

        
        this.xAxis = this.svg.append('g')
          .attr("transform", `translate(0,${this.padding[0]})`)

        return this.update(incomingData,department);
      }

      this.sibData = (teamMember)=>{
        let toReturn = this.data.filter((d)=>{return d.name == teamMember})[0];
        return toReturn.items;
      }
      

      this.xMin = ()=>{
        return d3.min(this.data,(dis)=>{
          return d3.min(dis.items,(dit)=>{
            return dit.duration;
          });
        });
      }

      this.xMax = ()=>{
        return d3.max(this.data,(dis)=>{
          let sum = 0;
          dis.items.forEach(dit=>{
            sum += parseFloat(dit.duration);
          });
          return sum;
        });
      }

      this.colorDomain = ()=>{
        var colDomain = [];

        this.data.forEach((member)=>{
          member.items.forEach(item=>{
            if(!colDomain.includes(item.task_cat)){
              colDomain.push(item.task_cat);
            }
          })
        });
        
        return colDomain;
      }

      this.parsedData = (data,department)=>{
        const WBC = this;
        data.forEach((member,i)=>{
          const name = member.name;

          member.items.forEach((item,j)=>{
            data[i].items[j]._name = name;
          })
        });
        
        if(department){
          data = data.filter(member => {
            return member.department == department
          })
        }
        
        return data;
      }

      this.update = (newData,department) => {
        const WBC = this;

        department  = department || false;

        newData  = newData
          ? WBC.parsedData(newData,department)
          : WBC.data;
        WBC.data = newData;

        
        WBC.height = (()=>{
          return WBC.data.length 
            ? (WBC.data.length * WBC.barHeight )
            : 800
        })();


        WBC.canvasWidth = WBC.width + WBC.padding[1] + WBC.padding[3];
        WBC.canvasHeight = WBC.height + WBC.padding[0] + WBC.padding[2];


        WBC.x = d3.scaleLinear()
          .range([
            this.padding[3],
            this.canvasWidth - this.padding[1]
            // this.padding[3] + this.width
          ])
          .domain([0,1])
          ;

        
        WBC.y = d3.scaleBand()
          .range([
            this.padding[0],
            this.canvasHeight - this.padding[2]
            // this.padding[0] + this.height
          ])
          .domain(WBC.data.map(d => d.name))
          .padding(.1)
          ;

        WBC.yAxis
          .transition()
          .call(d3.axisLeft(WBC.y))
          .attr('font-family',null)
          ;

        WBC.xAxis
          .transition()
          .call(
            d3.axisTop(WBC.x)
              .tickFormat((d)=>`${d * 100 }%`)
          )
          .attr('font-family',null)
          ;

        WBC.color = d3.scaleOrdinal()
          .range([
            '#fec87c', '#fb1818', '#f7bc00', '#006943', '#b6e4b6', '#0480fe', '#a168d9', '#fd7f03', '#16b900', '#01c6ab', '#0037b4', '#5e01a8', '#fe85d6', '#fff200', '#d7c368', '#e18256', '#313f76', '#547b80', '#8f4139', '#ecc65f', '#d069a9', '#008eb0', '#5f6046', '#c26558', '#4db7ff', '#5a3b00', '#e1e43c', '#6154a4', '#9e005d', '#000000'
          ])
          .domain(WBC.colorDomain())
          ;
        

        WBC.svgWrapper
          .style('position','relative')
          .style('padding-bottom', function(){
            return  (( (WBC.canvasHeight) / (WBC.canvasWidth) ) * 100) +'%'; //responsive
          });


        WBC.svg
          // .attr('width',WBC.canvasWidth) //so svg has a reference of "actual size" or responsive common sense
          // .attr('height',WBC.canvasOuterHeight) //so svg has a reference of "actual size" or responsive common sense
          // .style('outline','1px solid red')
          .attr('viewBox','0 0 ' + WBC.canvasWidth + ' ' + WBC.canvasHeight )
          ;

        WBC.member = WBC.svg.selectAll('g.chart-team-member')
          .data(
            WBC.data,
            (dat)=>{
              return dat.name;
            }
          )
          ;

        WBC.member_enter = WBC.member.enter()
          .append('g')
          .attr('class',(d)=>{
            return 'chart-team-member chart-team-member-'+d.name
          })
          ;
          
        WBC.member.exit()
          .remove()
          ;

        WBC.member_merge = WBC.member.merge(WBC.member_enter);

        WBC.shape = WBC.member_merge
          .selectAll('rect')
          .data((d)=>{
            var filteredItems = [];
            var instances = d.items.reduce(function(acc,dis){
              if(!acc.includes(dis.task_cat)){
                acc.push(dis.task_cat);
                filteredItems.push(dis);
              }
              
              return acc;
            },[]);

            return filteredItems;
          })
          ;

        WBC.shape_enter = WBC.shape.enter()
          .append('rect')
          .attr('x',WBC.x(0))
          .attr('y',(d)=>{
            return WBC.y(d._name);
          })
          .attr('width',WBC.x(0) - WBC.x.range()[0])
          .attr('height',(d)=>{
            return WBC.y.bandwidth()
          })
          .attr('fill',(d)=>{
            return WBC.color(d.task_cat)
          })
          .attr('data-tooltip-badge-background',(d)=>{
            return WBC.color(d.task_cat)
          })
          .attr('data-toggle','tooltip-hover')
          .attr('data-tooltip-placement','top')
          .attr('data-tooltip-center-x','true')
          .attr('data-tooltip-center-y','true')
          .attr('data-tooltip-badge','true')
          .attr('data-tooltip-badge-size','large')
          .attr('data-tooltip-classes','text-align-center')
          .attr('data-tooltip-width','200')
          ;

        WBC.shape.exit()
          .transition()
          .style('opacity',0)
          .remove()
          ;


        WBC.shape_merge = WBC.shape.merge(WBC.shape_enter)
          .attr('y',(d)=>{
            return WBC.y(d._name);
          })
          .transition()
          
          .attr('x',(d,i)=>{
            const prevD = i > 0 ? WBC.sibData(d._name)[i - 1] : false;

            d._x = prevD ?
              (parseFloat(prevD._x) + parseFloat(prevD.duration)) :
              0;

            
            return WBC.x(d._x)
          })
          .attr('width',(d)=>{
            return WBC.x(d.duration) - WBC.x.range()[0];
          })
          .attr('data-tooltip-content',(d)=>{
            const percent = (100 * ((WBC.x(d.duration) - WBC.x.range()[0]) / WBC.width)) + '%';
            return `<h5 class="no-margin-top">${d.task_cat}</h5>${percent}`
          })
          ;

        WBC.legend = WBC.legends.selectAll('div.legend-item')
          .data(WBC.colorDomain())

        WBC.legend_enter = WBC.legend.enter()
          .append('div')
          .attr('class',(d)=>{
            return 'legend-item flex-col-xs-12 flex-col-sm-6 flex-col-md-3'
          })
          ;



        WBC.legend_merge = WBC.legend.merge(WBC.legend_enter)
          .html((d)=>`
            <span class="legend" style="background-color:${WBC.color(d)}"></span> ${d}
          `)
          ;
          //@TODO merge for update
          
        WBC.legend.exit()
          .remove()
          ;

        // debugger;
          


        return this;

      }
      
      this.init();
    }

  window.WorkflowBarChart = WorkflowBarChart;
  }(window));
//////////////////////////////END COPY HERE//////////////////////////////
</script>


<script>
  /*
// Chart Step No. 4. Initiating
this Version loads d3 as well instead of manually embedding script. may cause the graph to fail if d3.js.org is randomly down
*/

  //store graph in a variable to allow updates
  var graph = new WorkflowBarChart(
    '#analytics-chart',
    placeholderData
  );
  var usePlaceholder = true;
  
// // // //debug dont use this
var placeholderDataChange = [
  {
    "name": "Cristian R",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .40
      },
      {
        "task_cat":"Software Development",
        "duration": .30
      },
      {
        "task_cat":"Internal Project Development",
        "duration": .15
      },
      {
        "task_cat":"Email Inbox Management",
        "duration": .15
      }
    ]
  },
  {
    "name": "Nadia R",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .69
      },
      {
        "task_cat":"Software Development",
        "duration": .01
      },
      {
        "task_cat":"Bugherds",
        "duration": .10
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .20
      }
    ]
  },
  {
    "name": "Mark S",
    "department": "developers",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .25
      },
      {
        "task_cat":"Software Development",
        "duration": .25
      },
      {
        "task_cat":"Bugherds",
        "duration": .25
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .25
      }
    ]
  },


  {
    "name": "Jenna E",
    "department": "designers",
    "items": [
      {
        "task_cat":"Client Homepage Design",
        "duration": .75
      },
      {
        "task_cat":"Client Internal Page Design",
        "duration": .05
      },
      {
        "task_cat":"Meetings",
        "duration": .01
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .09
      },
      {
        "task_cat":"Bugherds",
        "duration": .01
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .04
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .05
      }
    ]
  },
  {
    "name": "Stacy W",
    "department": "designers",
    "items": [
      {
        "task_cat":"Client Homepage Design",
        "duration": .20
      },
      {
        "task_cat":"Client Internal Page Design",
        "duration": .10
      },
      {
        "task_cat":"Meetings",
        "duration": .40
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .14
      },
      {
        "task_cat":"Bugherds",
        "duration": .15
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .005
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .005
      }
    ]
  },
  {
    "name": "Phoenix W",
    "department": "game_character",
    "items": [
      {
        "task_cat":"Campaign Analysis",
        "duration": .2
      },
      {
        "task_cat":"Software Development",
        "duration": .6
      },
      {
        "task_cat":"Pooping",
        "duration": .1
      },
      {
        "task_cat":"Research, Education & Training",
        "duration": .1
      }
    ]
  },
  {
    "name": "Miles E",
    "department": "game_character",
    "items": [
      {
        "task_cat":"AC Task",
        "duration": .1
      },
      {
        "task_cat":"Software Development",
        "duration": .1
      },
      {
        "task_cat":"Bugherds",
        "duration": .3
      },
      {
        "task_cat":"On-Page SEO",
        "duration": .5
      }
    ]
  },


  {
    "name": "Alana R.",
    "department": "seo",
    "items": [
      {
        "task_cat":"Link Building",
        "duration": .09
      },
      {
        "task_cat":"On-Page SEO",
        "duration": .01
      },
      {
        "task_cat":"Research",
        "duration": .30
      },
      {
        "task_cat":"Campaign Analysis",
        "duration": .50
      },
      {
        "task_cat":"Website Content Posts",
        "duration": .05
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .05
      }
    ]
  },

  {
    "name": "Adam H.",
    "department": "seo",
    "items": [
      {
        "task_cat":"Link Building",
        "duration": .20
      },
      {
        "task_cat":"On-Page SEO",
        "duration": .10
      },
      {
        "task_cat":"Research",
        "duration": .22
      },
      {
        "task_cat":"Campaign Analysis",
        "duration": .18
      },
      {
        "task_cat":"Website Content Posts",
        "duration": .1
      },
      {
        "task_cat":"Maintenance Task",
        "duration": .1
      },
      {
        "task_cat":"AC Tasks Management",
        "duration": .1
      }
    ]
  },



];


setTimeout(function(){
  
  var intervalId = setInterval(function(){
    usePlaceholder = !usePlaceholder;
    // clearInterval(intervalId);

    var newData = (!usePlaceholder ? placeholderDataChange : placeholderData);
    var departmentStringToFilter = (!usePlaceholder ? false : false);
  







    /*
    Chart Step No. 5 - Updating
    updateBubbles allows you to modify arguments and render a different variation of the data
    */
    
    graph.update(newData,departmentStringToFilter);


  }, 5000);

},2000);
  
</script>




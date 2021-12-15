
<div class="module-function filter-analytics-client-department position-relative">
    <div class="input-wrapper input-wrapper-horizontal input-wrapper-responsive no-padding-right">
        <label class="input-label">Filter By</label>
        <button data-toggle="dropdown" class="input input-block-mobile input-select">
            Department
            <!-- @if one or more status is checked -->
            <span class="filter-analytics-client-department-counter">
                <!-- @NOTE: counter will be rendered here -->
                (<span class="REPLACE">1</span>)
            </span>
        </button>
        <ul class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px">
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-analytics-client-department" value="Production" class="input input-inline">
                    Production
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-analytics-client-department" value="SEO" class="input input-inline">
                    SEO
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-analytics-client-department" value="Sales" class="input input-inline">
                    Sales
                </label>
            </li>
        </ul>
    </div>
</div>

<div class="module-function function-filter-employee position-relative">
    <button data-toggle="dropdown" class="input input-select input-block-mobile">
        Employee
        <!-- @if one or more Owner is checked -->
        <span class="filter-companies-employee-active">
            <!-- @NOTE: acct owner name will be rendered here -->
            (<span class="REPLACE">Yanni Yogi</span>)
        </span>
    </button>
    <ul class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px">
        <!-- @LOOP li -->
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-employee" value="profile_name" class="input input-inline">
                    Profile Name
                </label>
            </li>

            <!-- @PLACEHOLDER delete when ready -->

                <li>
                    <label class="input-label">
                        <input type="checkbox" checked name="filter-companies-employee" value="Yanni Yogi" class="input input-inline">
                        Yanni Yogi
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="El Tigre" class="input input-inline">
                        El Tigre
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="Matt Engarde" class="input input-inline">
                        Matt Engarde
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="Frank Sahwit" class="input input-inline">
                        Frank Sahwit
                    </label>
                </li>
                <li>
                    <label class="input-label">
                        <input type="checkbox" name="filter-companies-employee" value="Dee Vasquez" class="input input-inline">
                        Dee Vasquez
                    </label>
                </li>
    </ul>
</div>


<div class="module-function function-filter-client position-relative" style="max-width:30rem;">
    <input id="cli_ids" name="cli_ids" type="hidden">
    <input id="cli_names" name="cli_names" type="text" class="input-tags" data-tags-callback-name-filter="filterDataListUi" data-toggle="dropdown" />
    <div class="dropdown dropdown-left dropdown-top-flush">
        <ul id="cli_list" class="list-group list-group-toggle list-group-toggle-multiple list-group-toggle-allow-no-active">

                <!-- @NOTE: right now the js sets up to add all values to the hidden input field if this is selected, but let me know if we need to change this setup  -->
                <li><a href="#" data-client-id="all">Select All</a></li>
            <!-- @LOOP -->
                <li><a href="#" data-client-id="69"><span class="REPLACE">Client Name</span></a></li>
            <!-- @PLACEHOLDER delete when ready -->
                <li><a href="#" data-client-id="1">Terry Fawles</a></li>
                <li><a href="#" data-client-id="2">Phoenix Wright</a></li>
                <li><a href="#" data-client-id="3">Larry Butz</a></li>
                <li><a href="#" data-client-id="4">Maya Fey</a></li>
                <li><a href="#" data-client-id="5">Will Powers</a></li>
                <li><a href="#" data-client-id="6">Miles Edgelord</a></li>
                <li><a href="#" data-client-id="7">Lana Skye</a></li>
                <li><a href="#" data-client-id="8">Max Galactica</a></li>
                <li><a href="#" data-client-id="9">Matt Engarde</a></li>
                <li><a href="#" data-client-id="10">Ron Delite</a></li>
                <li><a href="#" data-client-id="11">Maggey Byrde</a></li>
                <li><a href="#" data-client-id="12">Iris Nun</a></li>
                <li><a href="#" data-client-id="13">Zak Gramarye</a></li>
                <li><a href="#" data-client-id="14">Wocky Kitaki</a></li>
                <li><a href="#" data-client-id="15">Machi Tobaye</a></li>
                <li><a href="#" data-client-id="16">Vera Misham</a></li>
                <li><a href="#" data-client-id="17">Solomon Starbuck</a></li>
                <li><a href="#" data-client-id="18">Juniper Woods</a></li>
                <li><a href="#" data-client-id="19">Damian Tenma</a></li>
                <li><a href="#" data-client-id="20">Athena Cykes</a></li>
                <li><a href="#" data-client-id="21">Ahlbi Ur'gaid</a></li>
                <li><a href="#" data-client-id="22">Trucy Wright</a></li>
                <li><a href="#" data-client-id="23">Bucky Whet</a></li>
                <li><a href="#" data-client-id="24">Dhurke Sahdmadhi</a></li>
        </ul>
    </div>
</div>

<script>





        //DEMO START HERE
            const INPUT_IDS = document.querySelector('#cli_ids');
            const INPUT_UI = document.querySelector('#cli_names.input-tags');
            const INPUT_LIST = document.getElementById('cli_list');
            const LIST_ITEMS_ID_ATTRIBUTE = 'data-client-id';
            const STRING_CASE = 'toLowerCase';
            const LIST_ITEM_FOCUS_CLASS = 'focus';

            //filter arg for legacy input tag
            const filterDataListUi = (value)=>{
                let valueArr = value.split(',');
                let allNames = getAllNames();

                if(valueArr.length){
                    valueArr = valueArr.filter((name)=>{
                        return allNames.includes(name);
                    });
                    value = valueArr.join(',');
                }
                return value;
            }

            //just gets all client data list as obj. Can be replaced or modified
            // returned format is an array of objects
            /*
            [{id<string>: name<string>}]
            
             */
            const getDataList = ()=>{
                const itemValues = INPUT_LIST.querySelectorAll(`a[${LIST_ITEMS_ID_ATTRIBUTE}]`);
                let toReturn = [];

                itemValues.forEach((itemValue) => {
                    const id = itemValue.getAttribute(LIST_ITEMS_ID_ATTRIBUTE);
                    if(id && id !== 'all'){
                        const obj = {};

                        obj.id = id;
                        obj.name = itemValue.innerText;
                        toReturn.push(obj);
                    }
                });

                return toReturn;
            }

            const getAllNames = ()=>{

                let allNames = getDataList().map(item=>{
                    return item.name;
                });
                

                return allNames;
            }
            
            //initialize linking up the faux datalist, hidden id input field, and list group
            const initDataList = ()=>{
                const INPUT_TAG_UI = INPUT_UI.closest('.input-tags-ui');
                const INPUT_TAG_UI_FIELD = INPUT_TAG_UI.querySelector('.input-tags-ui-input');
                const LIST_ITEMS = INPUT_LIST.querySelectorAll('li');


                //toggles display none for matching items from input text 
                const filterListItems = (textFilter)=>{
                    textFilter = textFilter || '';
                    
                    LIST_ITEMS.forEach(item=>{
                        const itemName = item.innerText.toString();

                        if(textFilter === ''){
                            item.classList.remove('display-none');
                        }else{
                            if(itemName[STRING_CASE]().includes( textFilter[STRING_CASE]() )){
                                item.classList.remove('display-none');
                            }else{
                                item.classList.add('display-none');
                            }
                        }

                    })

                }

                //get matching a element
                const getItemLink = (id) => {
                    return INPUT_LIST.querySelector(`a[${LIST_ITEMS_ID_ATTRIBUTE}="${id}"]`);
                }

                //validator for input tags
                const validateTags = (ValueArr)=>{

                }

                //update hidden field, input tags and
                const updateList = (updatedIds)=>{

                    let inputIdsArr = [];
                    
                    //get ids
                    if(updatedIds){
                        if(updatedIds == 'all'){
                            inputIdsArr = getDataList().map(item=>item.id);
                        }else{
                            inputIdsArr = updatedIds.split(',');
                        }
                    }

                    //reflect on true input field
                    INPUT_IDS.value = inputIdsArr.join(',');

                    //reflect on list
                    LIST_ITEMS.forEach(item=>{
                        const itemValue = item.querySelector(`a[${LIST_ITEMS_ID_ATTRIBUTE}]`);
                        
                        if(
                            inputIdsArr.length
                            && (
                                (
                                    updatedIds !== 'all'
                                    && inputIdsArr.includes(itemValue.getAttribute(LIST_ITEMS_ID_ATTRIBUTE))
                                ) || (
                                    updatedIds == 'all'
                                )
                            )
                        ){
                            item.classList.add('active');
                        }else{
                            item.classList.remove('active');
                        }
                    })
                    
                    // reflect on tags ui
                        let UiValueArr = [];
                        if(inputIdsArr.length){
                            inputIdsArr.forEach(id=>{
                                const match = getDataList().find(item=> item.id == id);
                                match && UiValueArr.push(match.name);
                            });
                        }

                        const UiValue = UiValueArr ? UiValueArr.join(',') : '';

                        fw.updateTags(jQuery(INPUT_UI),true,UiValue);

                }

                const listItemHandlerClick = (e)=>{
                    e.stopPropagation();
                    e.preventDefault();
                    const itemLink = e.target.querySelector(`a[${LIST_ITEMS_ID_ATTRIBUTE}]`);

                    let valueArr = INPUT_IDS.value ? INPUT_IDS.value.split(',') : [];

                    const id = itemLink.getAttribute(LIST_ITEMS_ID_ATTRIBUTE);
                    const idX = valueArr.indexOf(id);
                    
                    if(id !== 'all'){
                        if(e.target.classList.contains('active') && idX !== -1){
                            valueArr.splice(idX,1);
                        }else{
                            valueArr.push(id);
                        }
                    }else{
                        if(e.target.classList.contains('active')){
                            valueArr = [];
                        }else{
                            valueArr = [id];
                        }
                    }


                    updateList(valueArr.join(','));


                    //re-open dropdown after input tag lur from clicking on link
                    const dropdown = e.target.closest('.dropdown');
                        if (dropdown) {
                            setTimeout(() => {
                                fw.setDropdown(jQuery(dropdown), jQuery(INPUT_UI), 'open');
                            }, 201);
                        }
                        
                    }

                const InputUiHandlerKeyup = (e)=>{
                    // NOTE: ui uses a span so front end render is styleable
                    //show/hide matching names
                    const fieldValue = e.target.innerText;
                    filterListItems(fieldValue);

                }


                const InputUiHandlerFocus = InputUiHandlerKeyup;

                const InputUiHandlerChange = (e)=>{
                    //update list
                    const tagsValueArr = INPUT_UI.value ? INPUT_UI.value[STRING_CASE]().split(',') : [];

                    let valueArr = [];

                    if(tagsValueArr.length){
                        valueArr = getDataList().map(item=>{
                            if(tagsValueArr.includes(item.name[STRING_CASE]())){
                                return item.id
                            }
                        })
                    }

                    const newValue = valueArr.join(',');

                    if(newValue !== INPUT_IDS.value){
                        updateList(newValue);
                    }

                }


                const InputUiHandlerBlur = (e)=>{
                    e.stopPropagation();
                    jQuery(INPUT_TAG_UI).trigger('change');
                }


                //update now
                updateList(INPUT_IDS.value);


                //Event listeners
                LIST_ITEMS.forEach(item=>{
                    item.addEventListener('click',listItemHandlerClick);
                });
                INPUT_TAG_UI_FIELD.addEventListener('keyup',InputUiHandlerKeyup);
                INPUT_TAG_UI_FIELD.addEventListener('focus',InputUiHandlerFocus);
                INPUT_TAG_UI_FIELD.addEventListener('blur',InputUiHandlerBlur);


                //edit
                // INPUT_UI.addEventListener('change',InputUiHandlerChange);
                jQuery('html').on('change',jQuery(INPUT_UI),InputUiHandlerChange);
            }
            
            //initialize
            window.addEventListener('load',()=>{
                initDataList();
            });

    //DEMO ENDS HERE
    
</script>
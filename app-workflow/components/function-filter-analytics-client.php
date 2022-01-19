
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
    <div class="dropdown dropdown-top-flush dropdown-left" data-dropdown-width="200px" >
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
    </div>
</div>


<div class="module-function function-filter-client position-static">
    
    <button data-toggle="dropdown" data-dropdown-width="100%"  class="input input-block-mobile input-select">
        Client
        <!-- @if one or more status is checked -->
        <span class="filter-analytics-client-name-counter">
            <!-- @NOTE: counter will be rendered here -->
            (<span class="REPLACE">1</span>)
        </span>
    </button>
    <div class="dropdown dropdown-left dropdown-top-flush">
        <div class="module background-theme-contrast padding-small p flex-0-0 position-sticky offset-0-top offset-0-right offset-0-left">
            <div class="flex-grid flex-grid-fixed flex-grid-compact flex-grid-no-gutter-y">
                <div class="flex-col-xs-12 flex-col-md-3  flex-col-lg-6">
                    <input type="text" id="cli_ui_search" class="input input-block input-single-line" placeholder="Search to filter list" />
                </div>
                <div class="flex-col-xs-12 flex-col-md-3 flex-col-lg-2">
                    <label for="cli_ui_selectall" class="input-label">
                        <input type="checkbox" id="cli_ui_selectall" name="cli_ui_selectall" class="input input-inline" />
                        Select All
                    </label>
                </div>
                <div class="flex-col-xs-12 flex-col-md-3 flex-col-lg-2">
                    <label for="cli_ui_selectclient" class="input-label">
                        <input type="checkbox" id="cli_ui_selectclient" name="cli_ui_selectclient" class="input input-inline" />
                        Select all client projects
                    </label>
                </div>
                <div class="flex-col-xs-12 flex-col-md-3 flex-col-lg-2">
                    <label for="cli_ui_selectint" class="input-label">
                        <input type="checkbox" id="cli_ui_selectint" name="cli_ui_selectint" class="input input-inline" />
                        Select all internal projects
                    </label>
                </div>
            </div>
        </div>
        <div class=" margin-large-top flex-1-1 overflow-y-scroll" style="max-height: 420px">

            <div class="flex-grid flex-grid-fixed flex-grid-no-gutter-y">
                <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                    <label for="cli_id_REPLACE" class="input-label">
                        <input type="checkbox" id="cli_id_REPLACE" name="cli_ids[]" data-cli-internal class="input input-inline" />
                        Client Internal
                    </label>
                </div>
                <?php for($i=1; $i<=34; $i++){ ?>
                    <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                        <label for="cli_id_REPLACE" class="input-label">
                            <input type="checkbox" id="cli_id_REPLACE" name="cli_ids[]" class="input input-inline" />
                            Client not internal
                        </label>
                    </div>
                    <div class="flex-col-xs-12 flex-col-sm-6 flex-col-md-3">
                        <label for="cli_id_REPLACE" class="input-label">
                            <input type="checkbox" id="cli_id_REPLACE" name="cli_ids[]" data-cli-internal class="input input-inline" />
                            Client internal
                        </label>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- <script>





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
    
</script> -->

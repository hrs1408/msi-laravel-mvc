<div class="tabulator-row tabulator-selectable tabulator-row-odd" role="row"
     style="padding-left: 0px;">
    <div class="tabulator-cell" role="gridcell" tabulator-field="name" title=""
         style="width: 300px; display: inline-flex; align-items: center; height: 64px;">
        <div>
            <div class="font-medium whitespace-nowrap">{{$name}}</div>
            <div class="text-slate-500 text-xs whitespace-nowrap">{{$categoryName}}</div>
        </div>

    </div>
    <div class="tabulator-cell" role="gridcell" tabulator-field="images" title=""
         style="width: 301px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
        <div class="flex lg:justify-center">
            <img src="" alt="">
        </div>
        <div class="tabulator-col-resize-handle"></div>
        <div class="tabulator-col-resize-handle prev"></div>
    </div>
    <div class="tabulator-cell" role="gridcell" tabulator-field="remaining_stock" title=""
         style="width: 300px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
        {{$quantity}}
        <div class="tabulator-col-resize-handle"></div>
        <div class="tabulator-col-resize-handle prev"></div>
    </div>
    <div class="tabulator-cell" role="gridcell" tabulator-field="status" title=""
         style="width: 300px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
        <div class="flex items-center lg:justify-center text-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                 class="lucide lucide-check-square w-4 h-4 mr-2">
                <polyline points="9 11 12 14 22 4"></polyline>
                <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
            </svg>
            Inactive
        </div>
        <div class="tabulator-col-resize-handle"></div>
        <div class="tabulator-col-resize-handle prev"></div>
    </div>
    <div class="tabulator-cell" role="gridcell" tabulator-field="actions" title=""
         style="width: 290px; text-align: center; display: inline-flex; align-items: center; justify-content: center; height: 64px;">
        <div class="flex lg:justify-center items-center">
            <a class="edit flex items-center mr-3" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" icon-name="check-square" data-lucide="check-square"
                     class="lucide lucide-check-square w-4 h-4 mr-1">
                    <polyline points="9 11 12 14 22 4"></polyline>
                    <path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path>
                </svg>
                Edit
            </a>
            <a class="delete flex items-center text-danger" href="javascript:;">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                     stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                     class="lucide lucide-trash-2 w-4 h-4 mr-1">
                    <polyline points="3 6 5 6 21 6"></polyline>
                    <path
                        d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                    <line x1="10" y1="11" x2="10" y2="17"></line>
                    <line x1="14" y1="11" x2="14" y2="17"></line>
                </svg>
                Delete
            </a>
        </div>
    </div>
</div>

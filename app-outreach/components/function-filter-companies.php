
<div class="module-function function-filter-companies-status">
    <label class="input-label">Filter By</label>
    <div class="position-relative">
        <button data-toggle-dropdown class="input input-select">
            Status
            <!-- @if one or more status is checked -->
            <span class="filter-companies-status-counter">
                <!-- @NOTE: counter will be rendered here -->
                (<span class="REPLACE">1</span>)
            </span>
        </button>
        <ul class="dropdown dropdown-top-flush dropdown-right" data-dropdown-width="200px">
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="prospect" class="input input-inline">
                    Prospect
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="hot_prospect" class="input input-inline">
                    Hot Prospect
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="lead" class="input input-inline">
                    Lead
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" checked name="filter-companies-status" value="client" class="input input-inline">
                    Client
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="former_client" class="input input-inline">
                    Former Client
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="not_contacted" class="input input-inline">
                    Not Contacted
                </label>
            </li>
            <li>
                <label class="input-label">
                    <input type="checkbox" name="filter-companies-status" value="unqualified" class="input input-inline">
                    Unqualified
                </label>
            </li>
        </ul>
    </div>
</div>

<div class="module-function function-filter-companies-acctowner">
    <select class="input input-single-line" name="selecct-by-type" id="">
        <option value="">Owner</option>
        <!-- @placeholder replace/modify as needed -->
        <option value="Hannah Habagat">Hannah Habagat</option>
        <option value="Ammie Amihan">Ammie Amihan</option>
        <option value="Bagyon Zuko">Bagyon Zuko</option>
        <option value="Maliksi Kirstein">Maliksi Kirstein</option>
    </select>
</div>
<div class="card">
    <div class="card-header">
        <h3 class="card-title" style="font-size: 30px; font-weight: bold">Available Doctors</h3>
        <div class="input-group input-group-sm mt-2" style="max-width: 300px;">
            <div class="input-group-prepend">
                <span class="input-group-text" id="search-icon"><i class="fas fa-search"></i></span>
            </div>
            <input type="text" class="form-control search-input" id="search-doctors" placeholder="Search here"
                aria-describedby="search-icon">
        </div>
    </div>

    <div class="card-body">
        <div class="row" id="doctors-list">
            {foreach from=$doctors item=doctor}
                <div class="col-lg-4 col-md-6 col-sm-12 text-center mb-4 doctor-item">
                    <img src="{$doctor.image}" alt="{$doctor.name}"
                        style="height: 100px; width: 100px; border-radius: 50%;">
                    <p class="mt-2"><strong>{$doctor.name}</strong><br>{$doctor.department}</p>
                </div>
            {/foreach}
        </div>
    </div>
</div>
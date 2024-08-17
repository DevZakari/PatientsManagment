<div class="card">
    <div class="card-header">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="input-group input-group">
                    <input type="text" class="form-control" id="search-input" placeholder="Search here">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-md-center">
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-filter"></i> Filters
                </button>
                <button type="button" class="btn btn-default btn-sm">
                    <i class="fas fa-download"></i> Download
                </button>
            </div>

            <div class="col-md-4 ">
                <div class="d-inline">
                    <button class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <span>Page 1 of 2</span>
                    <button class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap" id="patients-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>MOB</th>
                    <th>date</th>
                    <th>Doctor</th>
                    <th>DEPARTMENT</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$patients item=patient}
                    <tr class="patient-row">
                        <td>
                            {if $patient.image}
                                <img src="../{$patient.image}" alt="{$patient.name}"
                                    style="height: 50px; width: 50px; border-radius: 50%;">
                            {else}
                                <img src="../assets/img/logo.png" alt="{$patient.name}"
                                    style="height: 50px; width: 50px; border-radius: 50%;">
                            {/if}
                        </td>
                        <td style="font-weight: bold;">{$patient.name}</td>
                        <td>{$patient.mobile}</td>
                        <td>{$patient.appointment_date|date_format:"%d/%m/%Y %H:%M"}</td>
                        <td style="font-weight: bold;">{$patient.doctor_name}</td>
                        <td>{$patient.doctor_department}</td>
                        <td>
                            <a href="edit_patient.php?id={$patient.id}" class="btn btn-sm btn-warning">Modifier</a>
                            <a href="delete_patient.php?id={$patient.id}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Voulez-vous vraiment supprimer ce patient ?');">Supprimer</a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
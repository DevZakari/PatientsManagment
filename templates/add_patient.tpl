{include file='header.tpl'}

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Ajouter un Patient</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-12" >
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #02a499;">
                            <h3 class="card-title">Informations du Patient</h3>
                        </div>
                        <form action="add_patient.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom du patient" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Entrez le numéro de mobile" required>
                                </div>
                                <div class="form-group">
                                    <label for="appointment_date">Date du Rendez-vous</label>
                                    <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" required>
                                </div>
                                <div class="form-group">
                                    <label for="doctor_id">Docteur</label>
                                    <select class="form-control" id="doctor_id" name="doctor_id" required>
                                        {foreach from=$doctors item=doctor}
                                            <option value="{$doctor.id}">{$doctor.name} ({$doctor.department})</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image du Patient</label>
                                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #02a499;">Ajouter le Patient</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{include file='footer.tpl'}

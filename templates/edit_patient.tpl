{include file='header.tpl'}

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0">Modifier un Patient</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #02a499;">
                            <h3 class="card-title">Modifier les Informations du Patient</h3>
                        </div>
                        <form action="edit_patient.php?id={$patient.id}" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nom</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{$patient.name}" required>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" value="{$patient.mobile}" required>
                                </div>
                                <div class="form-group">
                                    <label for="appointment_date">Date du Rendez-vous</label>
                                    <input type="datetime-local" class="form-control" id="appointment_date" name="appointment_date" value="{$patient.appointment_date|date_format:'Y-m-d\TH:i'}" required>
                                </div>
                                <div class="form-group">
                                    <label for="doctor_id">Docteur</label>
                                    <select class="form-control" id="doctor_id" name="doctor_id" required>
                                        {foreach from=$doctors item=doctor}
                                            <option value="{$doctor.id}" {if $doctor.id == $patient.doctor_id}selected{/if}>{$doctor.name} ({$doctor.department})</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image du Patient</label>
                                    <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
                                    <img src="../{$patient.image}" alt="{$patient.name}" style="height: 50px; width: 50px; border-radius: 50%; margin-top: 10px;">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: #02a499;">Enregistrer les Modifications</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{include file='footer.tpl'}

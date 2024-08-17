{include file='header.tpl'}

<div class="content-wrapper">
    {include file='components/title.tpl'}

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">

                    {include file='components/patient_list.tpl'}
                    {include file='components/actions_buttons.tpl'}
                </div>

                <div class="col-md-5">
                    {include file='components/widgets_overview.tpl'}
                    {include file='components/available_doctors.tpl'}
                </div>
            </div>

            
        </div>
    </section>
</div>

{include file='footer.tpl'}
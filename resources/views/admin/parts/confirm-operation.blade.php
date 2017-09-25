

@if(Session::has('confirm'))

    <div class="card mb-3">
        <div class="card-header alert-warning">{{Session::get('confirm')->getTitle()}}</div>

        <div class="card-body">

            <div class="row">
                <div class="col-12">
                    {{Session::get('confirm')->getDescription()}}
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="btn-default" href="{{Session::get('confirm')->getConfirmUrl()}}">Confirm</a>
                    <a class="btn " href="{{Session::get('confirm')->getCancelUrl()}}">Cancel</a>
                </div>
            </div>

        </div>
    </div>

@endif
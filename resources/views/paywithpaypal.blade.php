

<div class="panel panel-default">
    @if ($message = Session::get('success'))
    <div class="custom-alerts alert alert-success fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {!! $message !!}
    </div>
    <?php Session::forget('success');?>
    @endif
    @if ($message = Session::get('error'))
    <div class="custom-alerts alert alert-danger fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        {!! $message !!}
    </div>
    <?php Session::forget('error');?>
    @endif
    <div class="panel-body" style="background-color: #eee">
        <form class="form-horizontal" method="POST" id="payment-form" role="form" action="{!! URL::route('addmoney.paypal') !!}" >
            {{ csrf_field() }}
            <input type="hidden" name="amount" id="amount" value="{!! isset($total)?$total:10; !!}">            
            <div class="form-group pull-right">
                <button type="submit" class="btn btn-primary">Pay with Paypal</button>
            </div>
        </form>
    </div>
</div>

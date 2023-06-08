@if ($message = Session::get('success'))
<script>
    $.notify( "<?php echo $message; ?>",{  className: 'success', autoHideDelay: 3000, globalPosition: "top center" });
</script>
@endif


@if ($message = Session::get('error'))
<script>
    $.notify( "<?php echo $message; ?>",{  className: 'error', autoHideDelay: 3000, globalPosition: "top center" });
</script>

@endif


@if ($message = Session::get('warning'))
<script>
    $.notify( "<?php echo $message; ?>",{  className: 'error', autoHideDelay: 3000, globalPosition: "top center" });
</script>
@endif


@if ($message = Session::get('info'))
<script>
    $.notify( "<?php echo $message; ?>",{  className: 'error', autoHideDelay: 3000, globalPosition: "top center" });
</script>
@endif


@if ($message=$errors->any('error'))
<script>
   $.notify('Please check the form below for errors',{  className: 'error', autoHideDelay: 3000, globalPosition: "top center" }); 
</script>
@endif
<footer class="footer mt-auto py-3 bg-light">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a class="text-muted" href="#"><strong>Rons Fried Chicken</strong></a> &copy;
                </p>
            </div>
            <div class="col-6 text-end">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a class="text-muted" href="https://semangkamedia.epizy.com/" target="_blank">Support</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="../../assets/js/sweetalert.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/app.js"></script>
<script>
    if ($('#master-collapse').children().hasClass('active')) {
        $('#master-collapse').addClass('collapse show');
    }
    if ($('#kas-collapse').children().hasClass('active')) {
        $('#kas-collapse').addClass('collapse show');
    }
    if ($('#tran-collapse').children().hasClass('active')) {
        $('#tran-collapse').addClass('collapse show');
    }
    if ($('#lapTran-collapse').children().hasClass('active')) {
        $('#lapTran-collapse').addClass('collapse show');
    }
    if ($('#lapUang-collapse').children().hasClass('active')) {
        $('#lapUang-collapse').addClass('collapse show');
    }
    $('#aside').children().on('click', function() {
        $('#aside').children().removeClass('show');
        // $('.btn').attr('aria-expanded', 'false');
    })
</script>
</body>

</html>
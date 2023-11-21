@include('institute_admin_panel.dashboard.include.header')
<style>
    #stock_message {
        display: none;
    }
</style>
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto mt-4">
                <div class="card-body">
                    @if (session('delete-message-inventory'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('delete-message-inventory') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title text-center">
                            <h2>Deduction</h2>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <th>Title</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Hire Date</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>SR.Teacher</td>
                                <td>KAshan Shaikh</td>
                                <td>0313333333</td>
                                <td>17-01-2023</td>
                                <td>Teacher</td>
                                <td>
                                    <a class="" href="#">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Add Deduction
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>SR.Teacher</td>
                                <td>Maria Khan</td>
                                <td>031222222</td>
                                <td>15-06-2023</td>
                                <td>Teacher</td>
                                <td>
                                    <a class="" href="#">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Add Deduction
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>SR.Teacher</td>
                                <td>Anas</td>
                                <td>0311111</td>
                                <td>6-03-2023</td>
                                <td>Teacher</td>
                                <td>
                                    <a class="" href="#">
                                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                            Add Deduction
                                        </button>
                                    </a>
                                </td>
                            </tr>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
<script>
    $(document).ready(function() {
        $('.stock').click(function() {
            var id = $(this).data('id');
            $('#stock_id').val(id);
        });
    });
    $('.stock').click(function() {
        var id = $(this).data('id');
        var stock = $(this).data('stock');
        $('#stock_id').val(id);
        $('#stock').val(stock);
    });
    $('#add_stock').on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            contentType: false,
            processData: false,
            async: false,
        }).done(function(response) {
            var message = response;
            // $("#stock_message").html(message).show();
            $("#stock_message").text(message).show();

            $('#exampleModalCenter').modal('show');
        }).fail(function(xhr, status, error) {
            console.error(error);
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.usage').click(function() {
            var id = $(this).data('id');
            $('#usage_id').val(id);
        });
    });

    $('#add_usage').on('submit', function(e) {
        e.preventDefault();
        var url = $(this).attr('action');
        $.ajax({
            method: 'POST',
            url: url,
            data: new FormData(this),
            contentType: false,
            processData: false,
            async: false,
        }).done(function(response) {
            var message = response;
            $("#usage_message").text(message).show();

            // Get the updated available quantity from the response and update the table cell
            var updatedAvailableQuantity = parseInt($('#stock').text()) - parseInt($('#usage').val());
            $('#stock').text(updatedAvailableQuantity);

            $('#usageexampleModalCenter').modal('show');
        }).fail(function(xhr, status, error) {
            console.error(error);
        });
    });
</script>

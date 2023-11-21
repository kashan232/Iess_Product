@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
@include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="container-fluid mt-5">
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('inventory-added'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('inventory-added') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Inventory</h3>
                        </div>
                    </div>
                    <!-- Add new Book Form -->
                    <form class="new-added-form" method="POST" action="{{ route('store-add-inventory') }}">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Item Name *</label>
                                <input type="text" name="item_name" id="item_name" placeholder="e.g bottle"
                                    required class="form-control" />
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Stock *</label>
                                <input type="number" name="stock" id="stock" required
                                    placeholder="E.g (1,2)" class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Description*</label>
                                <input type="text" name="description" id="description" placeholder="write description "
                                    class="form-control" />
                            </div>
                        
                             <div class="col-12 form-group mg-t-8">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
                
       
    </div>
    <!-- Page Area End Here -->
</div>

@include('campus_admin_panel.dashboard.include.footer')



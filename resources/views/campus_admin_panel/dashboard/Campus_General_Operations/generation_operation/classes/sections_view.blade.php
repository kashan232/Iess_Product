@include('campus_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('campus_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container-fluid">
                <div class="dashboard-content-one">
                    <!-- Breadcubs Area Start Here -->
                    <!-- Breadcubs Area End Here -->
                    <!-- Student Table Area Start Here -->
                    <div class="card height-auto">
                        <div class="card-body">
                            <div class="heading-layout1">
                                <div class="item-title mt-3 mb-3">
                                    <h3>Class Sections</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table display data-table text-nowrap">
                                    <thead class="text-center">
                                        <tr>
                                            <th>S.No</th>
                                            <th>Class Name</th>
                                            <th>Section Name</th>
                                            <!-- Add more columns if needed -->
                                        </tr>
                                    </thead>
                                    <tbody id="table-body" class="text-center">
                                        @if (count($sections) < 1)
                                            <tr style="text-align: center;">
                                                <td colspan="3">Data not found.</td>
                                            </tr>
                                        @else
                                            <!-- foeach here  -->
                                            @foreach ($sections as $section)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $section->class_name }}</td>
                                                    <td>{{ $section->section_name }}</td>

                                                </tr>
                                            @endforeach
                                        @endif
                                        <tr id="empty-row" style="display: none;">
                                            <td colspan="5">No records found.</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Page Area End Here -->
        </div>

        @include('campus_admin_panel.dashboard.include.footer')





        <!-- // Assuming you have jQuery included -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var tableBody = document.getElementById('table-body');
                var emptyRow = document.getElementById('empty-row');

                if (tableBody.rows.length === 0) {
                    emptyRow.style.display = 'table-row';
                } else {
                    emptyRow.style.display = 'none';
                }
            });
        </script>

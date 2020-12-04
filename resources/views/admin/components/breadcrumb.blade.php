 <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">{{$title}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item text-muted active" aria-current="page"><a href="{{ URL::previous() }}">{{$parent}}</a></li>
                            <li class="breadcrumb-item text-muted" aria-current="page">{{$active}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

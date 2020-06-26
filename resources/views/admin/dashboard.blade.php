@extends('admin.layout')
@section('content')
  <div class="content">
    <div class="content">
      <div class="container-fluid">

        <div class="row" id="boxes">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
{{--                  <i class="material-icons">trending_up</i>--}}
                  <i class="material-icons">attach_money</i>
                </div>
                <p class="card-category">Transactions</p>
                <h3 class="card-title">{{$results['total']}}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons ">help</i>
                 Nombre de transactions
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">clear</i>
                </div>
                <p class="card-category">Echecs</p>
                <h3 class="card-title">{{$results['failed']}}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">help</i> Echecs de transaction
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">check</i>
                </div>
                <p class="card-category">Reussies</p>
                <h3 class="card-title">{{$results['success']}}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">help</i> tranactions reussies
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
{{--                  <i class="material-icons">local_atm</i>--}}
                  <i class="material-icons">monetization_on</i>
                </div>
                <p class="card-category">FCFA</p>
                <h3 class="card-title">{{$results['totalmoney']}}</h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">help</i>@if(isset($_SESSION['settings'])) {{$_SESSION['settings']['number']}} @else 30 @endif Derniers jours
                </div>
              </div>
            </div>
          </div>

        </div>
        <h3>Etat des Transactions</h3>
        <br>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">assignment</i>
                </div>
                <h4 class="card-title">DataTables.net</h4>
              </div>
              <div class="card-body">
                <div class="toolbar">
                  <!--        Here you can write extra buttons/actions for the toolbar              -->
                </div>
                <div class="material-datatables">
                  <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="datatables_length"><label>Show <select name="datatables_length" aria-controls="datatables" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="-1">All</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="datatables_filter" class="dataTables_filter"><label><span class="bmd-form-group bmd-form-group-sm"><input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="datatables"></span></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatables_info" width="100%" cellspacing="0">
                          <thead>
                          <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 132px;" aria-label="Office: activate to sort column ascending">Client</th>
                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 132px;" aria-label="Office: activate to sort column ascending">Numero</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 176px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Montant</th>
                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 259px;" aria-label="Position: activate to sort column ascending">Etat</th>
                            <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 113px;" aria-label="Date: activate to sort column ascending">Date</th>
                            <th class="disabled-sorting text-right sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 150px;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
{{--                          <tfoot>--}}
{{--                          <tr>--}}
{{--                            <th rowspan="1" colspan="1">Client</th>--}}
{{--                            <th rowspan="1" colspan="1">Numero</th>--}}
{{--                            <th rowspan="1" colspan="1">Montant</th>--}}
{{--                            <th rowspan="1" colspan="1">Etat</th>--}}
{{--                            <th rowspan="1" colspan="1">Start date</th>--}}
{{--                            <th class="text-right" rowspan="1" colspan="1">Actions</th></tr>--}}
{{--                          </tfoot>--}}
                          <tbody id="dataflow">
                          @foreach($results['transaction'] as $result)
                          <tr role="row" class="table" value="{{$result->unique_id}}">
                            <td tabindex="0" class="sorting_1">{{$result->client_id}}</td>
                            <td>{{$result->numero_tel}}</td>
                            <td>{{$result->montant}} FCFA</td>
                            @if($result->statut==12)
                            <td><button class="btn btn-success btn-round btn-sm">
                              <span class="btn-label">
                                <i class="material-icons">check</i>
                              </span>REUSSIE
                                <div class="ripple-container"></div></button>
                            </td>
                            @elseif($result->statut==11)
                              <td><button class="btn btn-warning btn-round btn-sm">
                              <span class="btn-label">
                                <i class="material-icons">check</i>
                              </span>Echouee
                                  <div class="ripple-container"></div></button>
                              </td>
                              @else
                              <td><button class="btn btn-danger btn-round btn-sm">
                              <span class="btn-label">
                                <i class="material-icons">clear</i>
                              </span>Echouee
                                  <div class="ripple-container"></div></button>
                              </td>
                              @endif
                            <td>{{$result->date_et_heure}}</td>
                            <td class="text-right">
{{--                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>--}}
                              <a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a>
{{--                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>--}}
                            </td>
                          </tr>

                          @endforeach
{{--                          <tr role="row" class="table-success">--}}
{{--                            <td class="sorting_1" tabindex="0">12000 FCFA</td>--}}
{{--                            <td><button class="btn btn-success btn-round btn-sm">--}}
{{--                              <span class="btn-label">--}}
{{--                                <i class="material-icons">check</i>--}}
{{--                              </span>Reussie--}}
{{--                                <div class="ripple-container"></div></button></td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>2009/10/09</td>--}}
{{--                            <td class="text-right">--}}
{{--                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>--}}
{{--                              <a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a>--}}
{{--                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>--}}
{{--                            </td>--}}
{{--                          </tr>--}}
{{--                          <tr role="row" class="table-warning">--}}
{{--                            <td class="sorting_1" tabindex="0">12000 FCFA</td>--}}
{{--                            <td><button class="btn btn-warning btn-round btn-sm">--}}
{{--                              <span class="btn-label">--}}
{{--                                <i class="material-icons">check</i>--}}
{{--                              </span>En cours--}}
{{--                                <div class="ripple-container"></div></button></td>--}}
{{--                            <td>London</td>--}}
{{--                            <td>2009/10/09</td>--}}
{{--                            <td class="text-right">--}}
{{--                              --}}{{--                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>--}}
{{--                              <a href="#" class="btn btn-link btn-info btn-just-icon edit"><i class="material-icons">visibility</i></a>--}}
{{--                              --}}{{--                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>--}}
{{--                            </td>--}}
{{--                          </tr>--}}

                          </tbody>

                        </table>
                       <div class="mr-auto" >{{$results['transaction']->links()}}</div>
{{--                      </div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 40 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="datatables_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="datatables_first"><a href="#" aria-controls="datatables" data-dt-idx="0" tabindex="0" class="page-link">First</a></li><li class="paginate_button page-item previous disabled" id="datatables_previous"><a href="#" aria-controls="datatables" data-dt-idx="1" tabindex="0" class="page-link">Prev</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatables" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables" data-dt-idx="4" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatables" data-dt-idx="5" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item next" id="datatables_next"><a href="#" aria-controls="datatables" data-dt-idx="6" tabindex="0" class="page-link">Next</a></li><li class="paginate_button page-item last" id="datatables_last"><a href="#" aria-controls="datatables" data-dt-idx="7" tabindex="0" class="page-link">Last</a></li></ul></div></div></div></div>--}}
                </div>
              </div>
              <!-- end content-->
            </div>
            <!--  end card  -->
          </div>
          <!-- end col-md-12 -->
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container-fluid">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com/">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/blog">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  </div>
  </div>
    @can('role-edit')
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <form action="{{route('change_stat_type')}}" method="POST">
          @csrf
        <li class="header-title"> Reglages</li>
        <li class="adjustments-line">
          <div class="form-group bmd-form-group is-filled">
            <label for="number" class="bmd-label-floating"> Statistiques sur (en jours):</label>
            @if(isset($_SESSION['settings']))
              <input type="number" class="form-control" value="{{$_SESSION['settings']['number']}}" name="number" id="number" required="true" aria-required="true">
              @else
              <input type="number" class="form-control" value="30" name="number" id="number" required="true" aria-required="true">
            @endif
          </div>
        </li>
        <li class="adjustments-line">
          <div href="javascript:void(0)" class="switch-trigger">
            <p>Statistiques globales</p>
            <label class="ml-auto">
              <div class="togglebutton switch-sidebar-mini">
                <label>
                  <input type="checkbox" name="full_stat" >
                  <span class="toggle"></span>
                </label>
              </div>
            </label>
            <div class="clearfix"></div>
          </div>
        </li>

        <li class="button-container">
          <button type="submit" target="_blank" class="btn btn-rose btn-block btn-fill">Save</button>
        </li>
        </form>
      </ul>
    </div>
  </div>
      @endcan
{{--    <div class="fixed-plugin">--}}
{{--      <div class="dropdown show-dropdown">--}}
{{--        <a href="#" data-toggle="dropdown">--}}
{{--          <i class="fa fa-cog fa-2x"> </i>--}}
{{--        </a>--}}
{{--        <ul class="dropdown-menu">--}}
{{--          <li class="header-title"> Sidebar Filters</li>--}}
{{--          <li class="adjustments-line">--}}
{{--            <a href="javascript:void(0)" class="switch-trigger active-color">--}}
{{--              <div class="badge-colors ml-auto mr-auto">--}}
{{--                <span class="badge filter badge-purple" data-color="purple"></span>--}}
{{--                <span class="badge filter badge-azure" data-color="azure"></span>--}}
{{--                <span class="badge filter badge-green" data-color="green"></span>--}}
{{--                <span class="badge filter badge-warning" data-color="orange"></span>--}}
{{--                <span class="badge filter badge-danger" data-color="danger"></span>--}}
{{--                <span class="badge filter badge-rose active" data-color="rose"></span>--}}
{{--              </div>--}}
{{--              <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="header-title">Sidebar Background</li>--}}
{{--          <li class="adjustments-line">--}}
{{--            <a href="javascript:void(0)" class="switch-trigger background-color">--}}
{{--              <div class="ml-auto mr-auto">--}}
{{--                <span class="badge filter badge-black active" data-background-color="black"></span>--}}
{{--                <span class="badge filter badge-white" data-background-color="white"></span>--}}
{{--                <span class="badge filter badge-red" data-background-color="red"></span>--}}
{{--              </div>--}}
{{--              <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="adjustments-line">--}}
{{--            <a href="javascript:void(0)" class="switch-trigger">--}}
{{--              <p>Sidebar Mini</p>--}}
{{--              <label class="ml-auto">--}}
{{--                <div class="togglebutton switch-sidebar-mini">--}}
{{--                  <label>--}}
{{--                    <input type="checkbox">--}}
{{--                    <span class="toggle"></span>--}}
{{--                  </label>--}}
{{--                </div>--}}
{{--              </label>--}}
{{--              <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="adjustments-line">--}}
{{--            <a href="javascript:void(0)" class="switch-trigger">--}}
{{--              <p>Sidebar Images</p>--}}
{{--              <label class="switch-mini ml-auto">--}}
{{--                <div class="togglebutton switch-sidebar-image">--}}
{{--                  <label>--}}
{{--                    <input type="checkbox" checked="">--}}
{{--                    <span class="toggle"></span>--}}
{{--                  </label>--}}
{{--                </div>--}}
{{--              </label>--}}
{{--              <div class="clearfix"></div>--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="header-title">Images</li>--}}
{{--          <li class="active">--}}
{{--            <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--              <img src="../assets/img/sidebar-1.jpg" alt="">--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li>--}}
{{--            <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--              <img src="../assets/img/sidebar-2.jpg" alt="">--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li>--}}
{{--            <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--              <img src="../assets/img/sidebar-3.jpg" alt="">--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li>--}}
{{--            <a class="img-holder switch-trigger" href="javascript:void(0)">--}}
{{--              <img src="../assets/img/sidebar-4.jpg" alt="">--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="button-container">--}}
{{--            <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-rose btn-block btn-fill">Buy Now</a>--}}
{{--            <a href="https://demos.creative-tim.com/material-dashboard-pro/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">--}}
{{--              Documentation--}}
{{--            </a>--}}
{{--            <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-info btn-block">--}}
{{--              Get Free Demo!--}}
{{--            </a>--}}
{{--          </li>--}}
{{--          <li class="button-container github-star">--}}
{{--            <a class="github-button" href="https://github.com/creativetimofficial/ct-material-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>--}}
{{--          </li>--}}
{{--          <li class="header-title">Thank you for 95 shares!</li>--}}
{{--          <li class="button-container text-center">--}}
{{--            <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>--}}
{{--            <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>--}}
{{--            <br>--}}
{{--            <br>--}}
{{--          </li>--}}
{{--        </ul>--}}
{{--      </div>--}}
{{--    </div>--}}
@endsection

<?php $__env->startSection('pagetitle', 'Status'); ?>
<?php $__env->startSection('styles'); ?>
<link href="<?php echo e(asset('css/vendor/admin.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


 <!-- Page Wrapper -->
 <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user-secret fa-sm"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Control Panel</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>DASHBOARD</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Manage
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Branch" aria-expanded="true" aria-controls="Branch">
          <i class="fas fa-fw fa-code-branch"></i>
          <span>BRANCH</span>
        </a>
        <div id="Branch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="/admin/branch/branches"><i class="fas fa-list-ul"></i> &nbsp;All Branches</a>
            <a class="collapse-item" href="/admin/branch/add"><i class="fas fa-calendar-plus"></i> &nbsp;Open Branch</a>
            <a class="collapse-item" href="/admin/branch/close"><i class="fas fa-calendar-minus"></i> &nbsp;Close Branch</a>
            
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Customer" aria-expanded="true" aria-controls="Customer">
          <i class="fas fa-fw fa-users"></i>
          <span>CUSTOMER</span>
        </a>
        <div id="Customer" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            
            <a class="collapse-item" href="\admin\customer\customers"><i class="fas fa-list-ul"></i> &nbsp;All Customers</a>
            <a class="collapse-item" href="\admin\customer\add"><i class="fas fa-user-plus"></i> &nbsp;Add Customer</a>
            <a class="collapse-item" href="\admin\customer\block"><i class="fas fa-user-times"></i> &nbsp;Block Customer</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Operations
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Shipment" aria-expanded="true" aria-controls="Shipment">
          <i class="fas fa-dolly-flatbed"></i>
          <span>SHIPMENTS</span>
        </a>
        <div id="Shipment" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class=" py-2 collapse-inner rounded">
            <a class="collapse-item" href="\admin\shipment\all"><i class="fas fa-list-ul"></i> &nbsp;All Shipments</a>
            <a class="collapse-item" href="\admin\shipment\live"><i class="fas fa-eye"></i> &nbsp;Live Status</a>
            <a class="collapse-item" href="\admin\shipment\request"><i class="fas fa-truck-pickup"></i> &nbsp;Pickup Requests</a>
            <a class="collapse-item" href="\admin\shipment\arrived"><i class="fas fa-download"></i> &nbsp;Arrived Parcels</a>
            <a class="collapse-item" href="\admin\shipment\shipped"><i class="fas fa-calendar-check"></i> &nbsp;Shipped Parcels</a>
            
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="\admin\earnings">
          <i class="fas fa-fw fa-dollar-sign"></i>
          <span>EARNINGS</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Account" aria-expanded="true" aria-controls="Account">
          <i class="fas fa-user-secret"></i>
          <span>ACCOUNT</span></a>
          <div id="Account" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class=" py-2 collapse-inner rounded">
              <a class="collapse-item" href="\admin\profile\view"><i class="fas fa-user-cog"></i> &nbsp;Account Settings</a>
              <a class="collapse-item" href="\admin\profile\password"><i class="fas fa-user-lock"></i> &nbsp;Change Password</a>
              
          </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


 <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
         <div id="content">

     

               <!-- Begin Page Content -->
              <div class="container-fluid py-4">
                
                <?php if(session('status')): ?>
                <div class="alert alert-success alert-dismissible fade show text-center font-weight-bold small" role="alert">
                    <?php echo e(session('status')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            
            <?php if(session('error')): ?>
            <div class="container" style="padding-left:10%;padding-right:10%;">
              <div class="alert alert-danger alert-dismissible fade show text-center font-weight-bold small" role="alert">
                <?php echo e(session('error')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            </div>
                   
            <?php endif; ?>
                <?php $__currentLoopData = $shipments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shipment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card Poppins">
                    <div class="card-header">
                        <div class="row justify-content-center">
                        <span class="font-weight-bold small"></span>
                        </div>
                    </div>
                    <div class="card-body" style="padding-top:5%;padding-left:10%;padding-right:10%;">
                      <div class="row mb-4">
                        <div class="col-md-10">
                          <img style="max-width:20%!important;text-align:left;" src="<?php echo e(asset('img/logo.png')); ?>" alt="">
                        </div>
                        <div class="col-md-2 small">
                        <span>Parcel ID :</span><span class="mdb-color-text" style="font-weight:bold;"> &nbsp;<?php echo e($shipment->parcel_id); ?></span>
                        </div>
                      </div>
                      <div class="row justify-content-center Poppins mb-4">
      
                        <h5 class="mdb-color-text font-weight-bold">Parcel Status</h5>
      
                      </div>
                      <div class="row justify-content-center">
                        <div class="barcode">
                        
                          <?php echo DNS1D::getBarcodeHTML($shipment->parcel_id, "C128",1.4,22); ?>

                          <p class="small text-center"><?php echo e($shipment->parcel_id); ?></p>
                      </div>
                      </div>
                      
                      <hr>
                      <div class="row justify-content-center mb-2">
                        <div class="col-md-4">
                          <h6 class="font-weight-bold" ><i class="fas fa-box-open"></i> Parcel Informations</h6><hr>
                          <div class="small">
                            <span class="font-weight-bold"> Zone : </span><span><?php echo e($shipment->zone); ?></span><br>
                          <span class="font-weight-bold"> Description : </span><span><?php echo e($shipment->details); ?></span><br>
                          <span class="font-weight-bold"> Type : </span><span><?php echo e($shipment->type); ?></span><br>
                          <span class="font-weight-bold"> Delivery : </span><span><?php echo e($shipment->delivery); ?></span>
                          <hr>
                          </div>
                        </div>
                        <div class="col-md-4">
                          
                         
                        </div>
                        <div class="col-md-4">
                          <div class="row mb-4">
                            <h5>Status: &nbsp;</h5><h5 style="background-color:#c8e6c9; color:#1b5e20;padding:0.5%;" class="font-weight-bold">&nbsp; <?php echo e($shipment->status); ?> &nbsp;</h5>
                          </div>
                          <div class="row">
                            
                              
                                 <span class="h5 raleway">Charge : </span><span class="h5 font-weight-bold mdb-color-text"> &nbsp;<?php echo e($shipment->amount); ?>৳(<?php echo e($order->payment_status); ?>)</span>
                              
                            
                           
                            
                          </div>
                        </div>
                      </div>
                     
                       
                      <div class="row justify-content-center mb-4">
                        <button onclick="goBack()" class="btn btn-unique">Check Again</button>
                      </div>
                       

                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>

  </div>
</div>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('js/vendor/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/vendor/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('js/vendor/admin.js')); ?>"></script>

<script type="text/javascript">
$(document).ready(function() {
$('#example').DataTable();
} );
</script>
<script> 
    
  function goBack() {
     window.history.back();
       }
</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Parcel-Manager\resources\views/admin/shipment/status.blade.php ENDPATH**/ ?>
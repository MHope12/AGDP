<?php $__env->startSection('content'); ?>

<div class="container body">
   <div class="main_container">
      <div class="col-md-3 left_col">
         <div class="left_col scroll-view">
           <div class="navbar nav_title" style="border: 0;">
               <a href="<?php echo e(route('Principal')); ?>" class="site_title"><img src="img/main/logo_1.png"> <span>Consultecnicos</span></a>
           </div>

           <div class="clearfix"></div>

           <br><br>

           <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
               <div class="menu_section">
                   <ul class="nav side-menu">
                       <li><a><i class="fa fa-envelope-o"></i> Correspondencia <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                               <li><a>C. Enviada <span class="fa fa-chevron-down"></span></a>
                                   <ul class="nav child_menu">
                                       <li><a href="<?php echo e(route('listM')); ?>">Registrar Nueva</a></li>
                                       <li><a href="<?php echo e(('listM')); ?>">Ver Todas</a></li>
                                       <li><a href="#">Archivos adjuntos</a></li>
                                   </ul>
                               </li>
                               <li><a>C. Recibida <span class="fa fa-chevron-down"></span></a>
                                   <ul class="nav child_menu">
                                       <li><a href="<?php echo e(route('listM')); ?>">Registrar Nueva</a></li>
                                       <li><a href="<?php echo e(route('listM')); ?>">Ver Todas</a></li>
                                       <li><a href="#">Archivos adjuntos</a></li>
                                   </ul>
                               </li>
                           </ul>
                       </li>
                       <li><a><i class="fa fa-edit"></i> Proyectos <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                               <li><a href="<?php echo e(route('nuevo')); ?>">Registrar Nuevo</a></li>
                               <li><a href="<?php echo e(route('lista')); ?>">Ver Todos</a></li>
                           </ul>
                       </li>
                       <li><a><i class="fa fa-globe"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                               <li><a href="<?php echo e(route('nuevo')); ?>">Registrar Nuevo</a></li>
                               <li><a href="<?php echo e(route('lista')); ?>">Ver Todos</a></li>
                           </ul>
                       </li>
                       <li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                               <li><a href="<?php echo e(route('newU')); ?>">Registrar Nuevo</a></li>
                               <li><a href="<?php echo e(route('listaU')); ?>">Ver Todos</a></li>
                           </ul>
                       </li>
                       <li><a><i class="fa fa-bar-chart-o"></i> Informes <span class="fa fa-chevron-down"></span></a>
                           <ul class="nav child_menu">
                               <li><a href="#">C. Enviada</a></li>
                               <li><a href="#">C. Recibida</a></li>
                           </ul>
                       </li>
                   </ul>
               </div>
           

           </div>
           <!-- /sidebar menu -->

           <!-- /menu footer buttons -->
           <div class="sidebar-footer hidden-small">
               
               <a data-toggle="tooltip" data-placement="top" title="Logout" href="iniciar_sesion.html">
                   <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
               </a>
               <a data-toggle="tooltip" data-placement="top" title="Logout" href="#">
                   <span class="glyphicon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
               </a>
           </div>
           <!-- /menu footer buttons -->
       </div>
       </div>

       <!-- top navigation -->
       <div class="top_nav">
   <div class="nav_menu">
       <nav>
           <div class="nav toggle">
               <a id="menu_toggle"><i class="fa fa-bars"></i></a>
           </div>

           <ul class="nav navbar-nav navbar-right">
               <li class="">
                   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                       Esperanza Beltrán
                       <span class=" fa fa-angle-down"></span>
                   </a>
                   <ul class="dropdown-menu dropdown-usermenu pull-right">
                       <li><a href="perfil.html"> Perfil</a></li>
                       <li><a href="javascript:;">Ayuda</a></li>
                       <li><a href="<?php echo e(('iniciar_sesion.html')); ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
                   </ul>
               </li>

               <li role="presentation" class="dropdown">
                   <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                       <i class="fa fa-envelope-o"></i>
                       <span class="badge bg-green">6</span>
                   </a>
                   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                       <li>
                           <a href="ver_correspondencia_recibida.html">
                            
                               <span>
                                   <span><strong>CONSECUTIVO-010203</strong></span>
                                   <!-- <span class="time">3 mins ago</span> -->
                               </span>
                               <span class="message">
                                   <strong>Asunto:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat...
                               </span>
                           </a>
                       </li>
                       <li>
                           <a href="ver_correspondencia_recibida.html">
                               <span>
                                   <span><strong>CONSECUTIVO-010203</strong></span>
                                   <!-- <span class="time">3 mins ago</span> -->
                               </span>
                               <span class="message">
                                   <strong>Asunto:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat...
                               </span>
                           </a>
                       </li>
                       <li>
                           <a href="#">
                            <span>
                                   <span><strong>CONSECUTIVO-010203</strong></span>
                                   <!-- <span class="time">3 mins ago</span> -->
                               </span>
                               <span class="message">
                                   <strong>Asunto:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat...
                               </span>
                           </a>
                       </li>
                       <li>
                           <a href="ver_correspondencia_recibida.html">
                                <span>
                                   <span><strong>CONSECUTIVO-010203</strong></span>
                                   <!-- <span class="time">3 mins ago</span> -->
                               </span>
                               <span class="message">
                                   <strong>Asunto:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat...
                               </span>
                           </a>
                       </li>
                       <li>
                           <div class="text-center">
                               <a href="lista_correspondencia_recibida.html">
                                   <strong>Ver Toda la Correspondencia</strong>
                                   <i class="fa fa-angle-right"></i>
                               </a>
                           </div>
                       </li>
                   </ul>
               </li>
           </ul>
       </nav>
   </div>
</div>
       <!-- /top navigation -->


       <?php echo $__env->yieldContent('main'); ?>



   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
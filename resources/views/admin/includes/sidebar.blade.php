<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
  <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
     style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
           <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    الضبط العام
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link {{ (request()->is('admin/adminpanelsetting*')) ?'active':'' }}">
                       <p>الضبط العام</p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link {{ (request()->is('admin/treasuries*') )?'active':'' }}">
                       <p>بيانات الخزن</p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview {{ ( (request()->is('admin/accountTypes*')||request()->is('admin/accounts*')  ||request()->is('admin/customer*')  ||request()->is('admin/suppliers_categories*') ||request()->is('admin/supplier*') ||(request()->is('admin/collect_transaction*') ||request()->is('admin/exchange_transaction*') ||request()->is('admin/delegates*') )) && !request()->is('admin/suppliers_orders*')  )?'menu-open':''  }}     ">
              <a href="#" class="nav-link {{ ( (request()->is('admin/accountTypes*')||request()->is('admin/accounts*')  ||request()->is('admin/customer*')  ||request()->is('admin/suppliers_categories*') ||request()->is('admin/supplier*') ||(request()->is('admin/collect_transaction*') ||request()->is('admin/exchange_transaction*') ||request()->is('admin/delegates*'))) && !request()->is('admin/suppliers_orders*')  )?'active':''  }}">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    الحسابات
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          انواع الحسابات المالية
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          الشجرة ( الحسابات المالية )
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link">
                       <p>
                          حسابات العملاء
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          حسابات المناديب
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          فئات الموردين
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          حسابات الموردين
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link">
                       <p>
                          شاشة تحصيل النقدية
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="">
                       <p>
                          شاشة صرف النقدية
                       </p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    ضبط المخازن
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       *
                       <p>
                          بيانات فئات الفواتير
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       *
                       <p>
                          بيانات المخازن
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       *
                       <p>
                          بيانات الوحدات
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link">
                       *
                       <p>
                          فئات الاصناف
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link">
                       *
                       <p>
                          الاصناف
                       </p>
                    </a>
                 </li>
              </ul>
           </li>

           <li class="nav-item has-treeview   ">
              <a href="#" class="nav-link">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    حركات مخزنية
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link">
                       <p>
                          فواتير المشتريات
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link">
                       <p>
                          فواتير مرتجع المشتريات العام
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                  <a href="" class="nav-link ">
                     <p>
                  جرد المخازن
                     </p>
                  </a>
               </li>


                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          أرصدة الأصناف
                       </p>
                    </a>
                 </li>
              </ul>
           </li>


           <li class="nav-item has-treeview   ">
            <a href="#" class="nav-link  ">
               <i class="nav-icon fas fa-tachometer-alt"></i>
               <p>
             حركات خطوط الانتاج
                  <i class="right fas fa-angle-left"></i>
               </p>
            </a>
            <ul class="nav nav-treeview  ">
               <li class="nav-item">
                  <a href="" class="nav-link">
                     <p>
             خطوط الانتاج
                     </p>
                  </a>
               </li>

               <li class="nav-item">
                <a href="" class="nav-link ">
                   <p>
               أوامر التشغيل
                   </p>
                </a>
             </li>


             <li class="nav-item">
               <a href="" class="nav-link ">
                  <p>
            صرف خامات لخط الانتاج
                  </p>
               </a>
            </li>


            </ul>
         </li>


           <li class="nav-item has-treeview  ">
              <a href="#" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    المبيعات
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          فواتير المبيعات
                       </p>
                    </a>
                 </li>
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          مرتجع المبيعات العام
                       </p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview   ">
              <a href="#" class="nav-link  ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    خدمات داخلية وخارجية
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview  ">
               <li class="nav-item">
                  <a href="" class="nav-link">
                     <p>
                  ضبط الخدمات
                     </p>
                  </a>
               </li>

               <li class="nav-item">
                  <a href="" class="nav-link ">
                     <p>
                  فواتير الخدمات
                     </p>
                  </a>
               </li>
              </ul>
           </li>
           <li class="nav-item has-treeview      ">
              <a href="#" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    حركة شفت الخزينة
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          شفتات الخزن
                       </p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview ">
              <a href="#" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    الصلاحيات
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          المستخدمين
                       </p>
                    </a>
                 </li>
              </ul>
           </li>
           <li class="nav-item has-treeview    ">
              <a href="#" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    التقارير
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                    <a href="" class="nav-link ">
                       <p>
                          كشف حساب مورد
                       </p>
                    </a>
                 </li>

                 <li class="nav-item">
                  <a href="" class="nav-link ">
                     <p>
                        كشف حساب عميل
                     </p>
                  </a>
               </li>


               <li class="nav-item">
                  <a href="" class="nav-link ">
                     <p>
                        كشف حساب مندوب
                     </p>
                  </a>
               </li>

              </ul>
           </li>
           <li class="nav-item has-treeview      ">
              <a href="#" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i>
                 <p>
                    المراقبة والدعم الفني
                    <i class="right fas fa-angle-left"></i>
                 </p>
              </a>
              <ul class="nav nav-treeview">
              </ul>
           </li>
        </ul>
     </nav>
     <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

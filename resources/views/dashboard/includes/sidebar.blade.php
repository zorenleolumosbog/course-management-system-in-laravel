    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="sidebar-brand-text">CHMSU Course</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
  
        <!-- Department Setup -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('department.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Department Setup</span></a>
        </li>
        
        <!-- Course Setup -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('course.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Course Setup</span></a>
        </li>
        

        <!-- Teacher Setup -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('teacher.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Teacher</span></a>
        </li>

        <!-- Course Assign To Teacher -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('course_assign_to_teacher.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Course Assign To Teacher</span></a>
        </li>

        <!-- View Course Statics -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('view_course_statics.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>View Course Statics</span></a>
        </li>

        <!-- Register Student -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('student.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Register Student</span></a>
        </li>

        <!-- Allocate Classroom -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('allocate_classroom.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Allocate Classroom</span></a>
        </li>

        <!-- View Class Schedule and Room Allocation -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('view_class_schedule_and_room_allocation.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>View Class Schedule and Room Allocation</span></a>
        </li>

         <!-- Enroll In Course -->
         <li class="nav-item">
          <a class="nav-link" href="{{route('enroll_in_course.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Enroll In Course</span></a>
        </li>

        <!-- Student Result Save -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('result.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Student Result Save</span></a>
        </li>

        <!-- View Result -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('view_result.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>View Student Result</span></a>
        </li>

        <!-- Unassign All Courses -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('unassgin_courses.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Unassign All Courses</span></a>
        </li>
        
        <!-- Unallocate All Classrooms -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('unallocate_all_classrooms.create')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Unallocate All Classrooms</span></a>
        </li>
        
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->
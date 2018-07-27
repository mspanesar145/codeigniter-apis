<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Users</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Users</a></li>
                    <li class="active">Users List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
<div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Users List</strong>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">Member Id</th>
                          <th scope="col">Username</th>
                          <th scope="col">Email</th>
                          <th scope="col">Pin</th>
                          <th scope="col">Company</th>
                          <th scope="col">Created on</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($users as $user){ ?>
                        <tr>
                          <th scope="row"><?php echo $user['member_id']; ?></th>
                          <td><?php echo $user['username']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                          <td><?php echo $user['pin']; ?></td>
                          <td><?php echo $user['company']; ?></td>
                          <td><?php echo date("M d Y",strtotime($user['created_date'])); ?></td>
                          <td> <div class="icon-container" style="width:40px !important;">
                                <a href="">
                                 <span class="ti-trash"></span><span class="icon-name"></span>
                                </a> </div>
                                <div class="icon-container" style="width:40px !important;">
                                <a href="">
                                 <span class="ti-pencil"></span><span class="icon-name"></span>
                                </a>
                                            </div>
                                        
                                        </td>
                        </tr>
                      <?php } ?>
                        
                      </tbody>
                    </table>
                </div>
            </div>
        </div>

        

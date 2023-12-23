<section class="section dashboard">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Floating labels Form</h5>

            <!-- Floating Labels Form -->
            <form class="row g-3" method="post" action="./AddTeam" enctype="multipart/form-data" >
                <div class="col-md-12">
                    <div class="form-floating">
                        <input type="text" name="team_name" class="form-control" id="floatingName" placeholder="Team Name">
                        <label for="floatingName">Team Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="date" name="foundation_year" class="form-control"  >
                        <label >Foundation Year</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" name="stadium_name" class="form-control"  placeholder="Stadium Name">
                        <label>Stadium Name</label>
                    </div>
                </div>
                <div class="col-12">
                    <!-- <label>Team detail</label> -->
                    <div class="form-floating">
                        <!-- TinyMCE Editor -->
                        <textarea name="team_detail	" class="tinymce-editor">
                            <p>Hello World!</p>
                            <p>This is TinyMCE <strong>full</strong> editor</p>
                        </textarea>
                        
                        <!-- End TinyMCE Editor -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="file" class="form-control" name="logo" id="floatingCity" >
                            <label for="floatingCity">Team Logo</label>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-4">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="State">
                            <option selected>New York</option>
                            <option value="1">Oregon</option>
                            <option value="2">DC</option>
                        </select>
                        <label for="floatingSelect">State</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                        <label for="floatingZip">Zip</label>
                    </div>
                </div> -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form><!-- End floating Labels Form -->

        </div>
    </div>
</section>




<!-- Add/Edit Team Modal -->
<div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="teamModalLabel">Add/Edit Team</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="teamForm">
                    <div class="mb-3">
                        <label for="teamName" class="form-label">Team Name</label>
                        <input type="text" class="form-control" id="teamName" name="teamName" required>
                    </div>
                    <div class="mb-3">
                        <label for="teamLeader" class="form-label">Team Leader</label>
                        <input type="text" class="form-control" id="teamLeader" name="teamLeader" required>
                    </div>
                    <div class="mb-3">
                        <label for="membersCount" class="form-label">Members Count</label>
                        <input type="number" class="form-control" id="membersCount" name="membersCount" required>
                    </div>
                    <!-- Add hidden input field for team ID if needed for editing -->
                    <input type="hidden" id="teamId" name="teamId">

                    <!-- Add a submit button -->
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
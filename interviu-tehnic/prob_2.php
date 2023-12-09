<?php include 'header.php';?>
<nav>
    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-pf-tab" data-bs-toggle="tab" data-bs-target="#nav-pf" type="button" role="tab" aria-controls="nav-pf" aria-selected="true">Persoana Fizica</button>
        <button class="nav-link" id="nav-pj-tab" data-bs-toggle="tab" data-bs-target="#nav-pj" type="button" role="tab" aria-controls="nav-pj" aria-selected="false">Persoana Juridica</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-pf" role="tabpanel" aria-labelledby="nav-pf-tab">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6"  id="form_one">
                <form name="pf" id="pf" action="" onsubmit="return validateFormPF()" method="POST"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nume</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Prenume</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefon</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    
                    <div class="mb-3">
                        <label for="message" class="form-label">Mesaj</label>
                        <input type="text" class="form-control" id="message" name="message">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="select" id="select" aria-label="Select">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file" accept="image/*,.pdf">
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <div class="col">        
            </div>   
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-pj" role="tabpanel" aria-labelledby="nav-pj-tab">
    <div class="container mt-5">
        <div class="row">
            <div class="col">
            </div>   
            <div class="col-6"  id="form_two">
                <form name="pj" id="pj" action="" onsubmit="return validateFormPJ()" method="POST"  enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name_company" class="form-label">Nume Companie</label>
                        <input type="text" class="form-control" id="name_company" name="name_company" value="">
                    </div>
                    <div class="mb-3">
                        <label for="cui" class="form-label">CUI</label>
                        <input type="text" class="form-control" id="cui" name="cui" value="">
                    </div>
                    <div class="mb-3">
                        <label for="email_company" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email_company" name="email_company" value="">
                    </div>
                    <div class="mb-3">
                        <label for="phone_company" class="form-label">Telefon</label>
                        <input type="text" class="form-control" id="phone_company" name="phone_company" value="">
                    </div>
                    
                    <div class="mb-3">
                        <label for="message_company" class="form-label">Mesaj</label>
                        <input type="text" class="form-control" id="message_company" name="message_company" value="">
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="select_company" id="select_company" aria-label="Select">
                            <option selected>Select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>      
                            <option value="4">Four</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file_company" name="file_company" accept="image/*,.pdf">
                            <label class="custom-file-label" for="file_company">Choose file</label>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <div class="col">      
            </div>    
        </div>
    </div>
  </div>
</div>

<?php include 'footer.php';?>
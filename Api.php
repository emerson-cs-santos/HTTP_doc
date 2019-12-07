<?php
    include('cabec.php');
?>

                    <h1 class="text-center">Api Rest</h1>
                </div> 
            </header>

            <main>
                <section>

                    <header>
                        <h2 class='mt-3'>Req Res in</h2>
                    </header>

                    <div class='row mt-4'>
                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">GET - LIST USERS</p>
                                <input id='GET_LIST_USERS' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='GET_RESP_LIST_USERS' class='mt-2'></div>
                            </div>                        
                        </div>

                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">GET - SINGLE USER</p>
                                <input id='GET_SINGLE_USER' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='GET_RESP_SINGLE_USER' class='mt-2'></div>
                            </div>                        
                        </div>  

                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">GET - SINGLE USER NOT FOUND</p>
                                <input id='SINGLE_USER_NOT_FOUND' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='GET_RESP_SINGLE_USER_NOT_FOUND' class='mt-2'></div>
                            </div>                        
                        </div> 
                    </div>
                    

                    <div class='row mt-4'>
                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">GET - LIST RESOURCE</p>
                                <input id='GET_LIST_RESOURCE' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='GET_RESP_LIST_RESOURCE' class='mt-2'></div>
                            </div>                        
                        </div>

                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">GET - SINGLE RESOURCE</p>
                                <input id='GET_SINGLE_RESOURCE' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='GET_RESP_SINGLE_RESOURCE' class='mt-2'></div>
                            </div>                        
                        </div>  

                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">GET - SINGLE RESOURCE NOT FOUND</p>
                                <input id='SINGLE_RESOURCE_NOT_FOUND' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='GET_RESP_SINGLE_RESOURCE_NOT_FOUND' class='mt-2'></div>
                            </div>                        
                        </div> 
                    </div>


                    <div class='row mt-4'>
                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">POST - CREATE</p>
                                <input id='POST_CREATE' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='POST_RESP_CREATE' class='mt-2'></div>
                            </div>                        
                        </div>

                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">PUT - UPDATE</p>
                                <input id='PUT_UPDATE' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='PUT_RESP_UPDATE' class='mt-2'></div>
                            </div>                        
                        </div>  

                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">PATCH - UPDATE</p>
                                <input id='PATCH_UPDATE' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='PATCH_RESP_UPDATE' class='mt-2'></div>
                            </div>                        
                        </div>  
                    </div>
                    
                    
                    <div class='row mt-4'>
                        <div class="card mb-5 text-center col-4" style="width: 18rem;">
                            <div class="card-body">
                                <p class="card-title font-weight-bold">DELETE - DELETE</p>
                                <input id='DELETE_UPDATE' type="button" class="btn btn-primary btn-lg" Value = 'GO'>
                                <div id='DELETE_RESP' class='mt-2'></div>
                            </div>                        
                        </div>
                    </div>

                </section>
            </main>

            <script>
              
                // GET_LIST_USERS
                var get = document.getElementById("GET_LIST_USERS");
                get.onclick = function(){
                    
                    var params = 'page=' + encodeURIComponent(2);

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("GET_RESP_LIST_USERS");
                            get_resp.innerHTML = resposta;
                        }
                    }
                    xmlhttp.open("GET", "https://reqres.in/api/users?" + params,true);
                    xmlhttp.send();
                }

                // GET_SINGLE_USER
                var get = document.getElementById("GET_SINGLE_USER");
                get.onclick = function(){
                    
                    var params = encodeURIComponent(2);

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("GET_RESP_SINGLE_USER");
                            get_resp.innerHTML = resposta;
                        }
                    }
                    xmlhttp.open("GET", "https://reqres.in/api/users/" + params,true);
                    xmlhttp.send();
                }

                // SINGLE USER NOT FOUND
                var get = document.getElementById("SINGLE_USER_NOT_FOUND");
                get.onclick = function(){
                    
                    var params = encodeURIComponent(23);

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 404) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("GET_RESP_SINGLE_USER_NOT_FOUND");
                            get_resp.innerHTML = resposta;
                        }
                    }
                    xmlhttp.open("GET", "https://reqres.in/api/users/" + params,true);
                    xmlhttp.send();
                }



                // GET_LIST_RESOURCE
                var get = document.getElementById("GET_LIST_RESOURCE");
                get.onclick = function(){

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("GET_RESP_LIST_RESOURCE");
                            get_resp.innerHTML = resposta;
                        }
                    }
                    xmlhttp.open("GET", "https://reqres.in/api/unknown",true);
                    xmlhttp.send();
                }


                // GET_SINGLE_RESOURCE
                var get = document.getElementById("GET_SINGLE_RESOURCE");
                get.onclick = function(){
                    
                    var params = encodeURIComponent(2);

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("GET_RESP_SINGLE_RESOURCE");
                            get_resp.innerHTML = resposta;
                        }
                    }
                    xmlhttp.open("GET", "https://reqres.in/api/unknown/" + params,true);
                    xmlhttp.send();
                }


                // SINGLE_RESOURCE_NOT_FOUND
                var get = document.getElementById("SINGLE_RESOURCE_NOT_FOUND");
                get.onclick = function(){
                    
                    var params = encodeURIComponent(23);

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 404) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("GET_RESP_SINGLE_RESOURCE_NOT_FOUND");
                            get_resp.innerHTML = resposta;
                        }
                    }
                    xmlhttp.open("GET", "https://reqres.in/api/unknown/" + params,true);
                    xmlhttp.send();
                }


                // POST_CREATE
                var get = document.getElementById("POST_CREATE");
                get.onclick = function(){

                    var cadastro_obj = new Object ();
                    cadastro_obj.name = 'morpheus';
                    cadastro_obj.job = 'leader';
                    var params = JSON.stringify(cadastro_obj);    

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 201) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("POST_RESP_CREATE");
                            get_resp.innerHTML = resposta;
                        }
                    }

                    xmlhttp.open("POST", "https://reqres.in/api/users", true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send(params);                    
                }


                // PUT_UPDATE
                var get = document.getElementById("PUT_UPDATE");
                get.onclick = function(){

                    var cadastro_obj = new Object ();
                    cadastro_obj.name = 'morpheus';
                    cadastro_obj.job = 'zion resident';
                    var params = JSON.stringify(cadastro_obj);    

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("PUT_RESP_UPDATE");
                            get_resp.innerHTML = resposta;
                        }
                    }

                    xmlhttp.open("PUT", "https://reqres.in/api/users/2", true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send(params);                    
                }


                // PATCH_UPDATE
                var get = document.getElementById("PATCH_UPDATE");
                get.onclick = function(){

                    var cadastro_obj = new Object ();
                    cadastro_obj.name = 'morpheus';
                    cadastro_obj.job = 'zion resident';
                    var params = JSON.stringify(cadastro_obj);    

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("PATCH_RESP_UPDATE");
                            get_resp.innerHTML = resposta;
                        }
                    }

                    xmlhttp.open("PATCH", "https://reqres.in/api/users/2", true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send(params);                    
                }


                // DELETE_UPDATE
                var get = document.getElementById("DELETE_UPDATE");
                get.onclick = function(){

                    // AJAX
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 204) {
                            var resposta = this.responseText;

                            var get_resp = document.getElementById("DELETE_RESP");
                            get_resp.innerHTML = resposta;
                        }
                    }

                    xmlhttp.open("DELETE", "https://reqres.in/api/users/2", true);
                    xmlhttp.setRequestHeader("Content-type", "application/json");
                    xmlhttp.send();                    
                }

            </script>

<?php
    include('footer.php');
?>
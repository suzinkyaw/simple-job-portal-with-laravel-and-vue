
<template>
    <div>

        <div class="panel panel-default">
            <div class="panel-heading headline2">Find your dream job with Top Employers</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Name</label>
                            <input type="text" v-model="employee.name" class="form-control">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Email</label>
                            <input type="mail" v-model="employee.email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Password</label>
                            <input type="password" v-model="employee.password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Gender  </label>
                            <select v-model="employee.gender"  name="gender" class="form-control">
                             <option gender  disabled>Select Gender</option>
                             <option v-for="gender in genders" value='gender' v-text="gender.name">{{gender.name}}</option>
                            </select> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Phone Number</label>
                            <input type="text" v-model="employee.tel1" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Phone Number(optional)</label>
                            <input type="text" v-model="employee.tel2" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Your Primary Job Function  </label>
                            <select v-model="employee.job_category_id"  name="job_category_id" class="form-control">
                             <option job_category_id  disabled>Select Job Function</option>
                             <option v-for="category in categories" v-bind:value='category.id' v-text="category.name">{{category.name}}</option>
                            </select> 
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Upload your latest CV and Apply from anywhere</label>
                            <input type="file"  @change="onFileChange" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <button class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                employee: {
                    name: '',
                    email: '',
                    password: '',
                    tel1: '',
                    tel2: '',
                    job_category_id: '',
                    cv: '',
                },
                categories :[],
                genders :[
                {id:'0', name: 'Female'},
                {id:'1', name: 'Male'}, 
                ]
            }
        },
          mounted() {
            var app = this;
            axios.get('/api/v1/categories')
                .then(function (resp) {

                    app.categories = resp.data;
                })
                .catch(function (resp) {
                    console.log(resp);
                    alert("Could not load job categories");
                });
        },
        methods: {
            saveForm() {
                var app = this;
                var newEmployee = app.employee;
                let config = {
                header : {
                  'Content-Type' : 'multipart/form-data'
                }
                }
                axios.post('/api/v1/createEmployee', newEmployee,config)
                    .then(function (resp) {
                     alert("created"); 
                    location.replace('login') ;
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your account");
                    });
            },
            onFileChange(e) {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                  return;
                  var app = this;
                app.employee.cv = files[0];
              },
        }
    }
</script>

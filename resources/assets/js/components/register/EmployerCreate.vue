
<template>
    <div>

        <div class="panel panel-default">
            <div class="panel-heading headline2">Build  your best company with top Candidates</div>
            <div class="panel-body">
                <form v-on:submit="saveForm()">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Company Name</label>
                            <input type="text" v-model="company.name" class="form-control">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Email</label>
                            <input type="mail" v-model="company.email" class="form-control">
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Password</label>
                            <input type="password" v-model="company.password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Address</label>
                            <input type="text" v-model="company.address" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Phone Number</label>
                            <input type="text" v-model="company.tel" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Website</label>
                            <input type="text" v-model="company.website" class="form-control">
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label class="control-label">Number of Employees</label>
                            <input type="text" v-model="company.no_of_employee" class="form-control">
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
                company: {
                    name: '',
                    password: '',
                    address: '',
                    tel: '',
                    website: '',
                    email: '',
                   no_of_employee: '',
                }
            }
        },
        methods: {
            saveForm() {
                var app = this;
                var newCompany = app.company;
                axios.post('/api/v1/companies', newCompany)
                    .then(function (resp) {
                   alert("created"); 
                    location.replace('login') ;
                    })
                    .catch(function (resp) {
                        console.log(resp);
                        alert("Could not create your company");
                    });
            }
        }
    }
</script>

<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form @submit.prevent="login" >


                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input v-model="form.email" id="email" type="email" class="form-control" name="email"  required autocomplete="email" autofocus>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input v-model="form.password" id="password" type="password" class="form-control " name="password" required autocomplete="current-password">

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                      Login
                                    </button>

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {Form, HasError, AlertError} from 'vform'
    export default {
        name: "Index",
        data(){
            return{
                form: new Form({
                    email: '',
                    password: '',
                })
            }
        },
        methods:{
            login(){

                this.$axios.post('/api/auth/login', this.form)
                    .then(function (res) {
                        console.log(res);
                        localStorage.setItem('token', res.data.access_token);
                        let token = localStorage.getItem('token')
                        console.log(token)

                    }).catch(function (err) {
                   alert('No')

                })
            }
        }
    }
</script>

<style scoped>

</style>
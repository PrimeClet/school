<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="text-center">FINISTECH YAOUNDE CAMPUS is approved and recognized by the MINESUP.</p>
                <p class="text-center">FINISTECH; BUILD YOUR DREAMS IN INNOVATIVE SCIENCE AND TECHNOLOGY</p>
                <p class="text-center">APPLICATION PACKAGE</p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="identification-tab" data-bs-toggle="tab" data-bs-target="#identification" type="button" role="tab" aria-controls="home" aria-selected="true">
                            Identification <i class="fas fa-lightbulb light" v-if="done1"></i> <i class="fas fa-check-circle green" v-if="!done1"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="coordonnee-tab" data-bs-toggle="tab" data-bs-target="#coordonnee" type="button" role="tab" aria-controls="profile" aria-selected="false">Coordonnée <i class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="inscription-tab" data-bs-toggle="tab" data-bs-target="#inscription" type="button" role="tab" aria-controls="contact" aria-selected="false">Inscription <i class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="etudes-tab" data-bs-toggle="tab" data-bs-target="#etudes" type="button" role="tab" aria-controls="contact" aria-selected="false">Etudes Secondaires <i class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pieces-tab" data-bs-toggle="tab" data-bs-target="#pieces" type="button" role="tab" aria-controls="contact" aria-selected="false">Pieces Jointes <i class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="comta-tab" data-bs-toggle="tab" data-bs-target="#compta" type="button" role="tab" aria-controls="contact" aria-selected="false">Comptabilité <i class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="confirmation-tab" data-bs-toggle="tab" data-bs-target="#confirmation" type="button" role="tab" aria-controls="contact" aria-selected="false">Confirmation <i class="fas fa-lightbulb light"></i></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="identification" role="tabpanel" aria-labelledby="home-tab">
                        <form class="row g-3 p-3" @submit.prevent="addProduct">
                            <div class="col-md-6">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" class="form-control" id="surname" v-model="product.surname" required>
                                <div id="surnameHelp" class="form-text">like This JOHN DOE</div>
                            </div>
                            <div class="col-md-6">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="firstname" v-model="product.firstname" required>
                                <div id="firstnameHelp" class="form-text">like This JOHN DOE</div>
                            </div>
                            <div class="col-md-6">
                                <p>Title</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="mr" value="Mr" v-model="product.title">
                                    <label class="form-check-label" for="mr">Mr</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="mrs" value="Mrs" v-model="product.title">
                                    <label class="form-check-label" for="mrs">Mrs</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="previousname" class="form-label">Previous Name</label>
                                <input type="text" class="form-control" id="previousname" v-model="product.previousname">
                                <div id="previousnameHelp" class="form-text">like This JOHN DOE</div>
                            </div>
                            <div class="col-6">
<!--                                <div class="mb-3">-->
                                    <label for="birthdate" class="form-label">Date Of Birth</label>
                                    <input type="date" class="form-control" id="birthdate" v-model="product.datebirth">
<!--                                </div>-->
                            </div>
                            <div class="col-6">
<!--                                <div class="mb-3">-->
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required v-model="product.email">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
<!--                                </div>-->
                            </div>
                            <div class="col-md-6">
                                <p>Gender</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender"  checked id="male" value="male" v-model="product.gender">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" v-model="product.gender">
                                    <label class="form-check-label" for="female">female</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="address" class="form-label">Permanent Address</label>
                                <input type="text" class="form-control" id="address" v-model="product.address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tel1" class="form-label">Telephone Day</label>
                                <input type="text" class="form-control" id="tel1" v-model="product.dayphone" required>
                            </div>
                            <div class="col-md-6">
                                <label for="tel2" class="form-label">Telephone Evening</label>
                                <input type="text" class="form-control" id="tel2" v-model="product.eveningphone">
                            </div>
                            <div class="col-md-6">
                                <label for="fax" class="form-label">Fax</label>
                                <input type="text" class="form-control" id="fax" v-model="product.fax">
                            </div>
                            <div class="col-md-6">
                                <label for="code" class="form-label">Country Code</label>
                                <input type="text" class="form-control" id="code" v-model="product.code" required>
                            </div>
                            <div class="col-12">
                                <button type="reset" class="btn btn-danger btn-sm float-right">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm float-right mr-3">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="coordonnee" role="tabpanel" aria-labelledby="profile-tab">
                        <form class="row g-3 p-3" @submit.prevent="addProduct">
                            <div class="col-md-12">
                                <label for="nationality" class="form-label">Nationality</label>
                                <input type="text" class="form-control" id="nationality">
                            </div>
                            <div class="col-md-6">
                                <label for="cob" class="form-label">Country Of Birth</label>
                                <input type="text" class="form-control" id="cob">
                            </div>
                            <div class="col-md-6">
                                <label for="coob" class="form-label">City Of Birth</label>
                                <input type="text" class="form-control" id="coob">
                            </div>
                            <div class="col-md-12">
                                <label for="residence" class="form-label">Country Of Permanent Residence</label>
                                <input type="text" class="form-control" id="residence">
                            </div>
                            <div class="col-md-12">
                                <label for="funding" class="form-label">Proposed source of academic funding</label>
                                <input type="text" class="form-control" id="funding">
                            </div>
                            <div class="col-12">
                                <button type="reset" class="btn btn-danger btn-sm float-right">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm float-right mr-3">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="inscription" role="tabpanel" aria-labelledby="contact-tab">

                    </div>
                    <div class="tab-pane fade" id="etudes" role="tabpanel" aria-labelledby="contact-tab">

                    </div>
                    <div class="tab-pane fade" id="pieces" role="tabpanel" aria-labelledby="contact-tab">

                    </div>
                    <div class="tab-pane fade" id="compta" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    <div class="tab-pane fade" id="confirmation" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {

                done1: false,

                product: {
                },

                student: {

                }
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/students/')
                .then(response => {
                    this.student = response.data;
                    console.log(this.student)
                });
        },
        methods: {
            addProduct() {
                this.axios
                    .post('http://localhost:8000/api/students', this.product)
                    .then(response => (
                        this.done1 = true,
                        console.log(response)
                    ))
                    .catch(err => console.log(err))
                    .finally(() => this.loading = false)
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

.light{
    color: yellow !important;
}

.green {
    color: green !important;
}

</style>

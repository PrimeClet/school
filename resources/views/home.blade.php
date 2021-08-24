@extends('layouts.app')

@section('content')
    <div class="container" id="appone">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="text-center">FINISTECH YAOUNDE CAMPUS is approved and recognized by the MINESUP.</p>
                <p class="text-center">FINISTECH; BUILD YOUR DREAMS IN INNOVATIVE SCIENCE AND TECHNOLOGY</p>
                <p class="text-center">APPLICATION PACKAGE</p>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="identification-tab" data-bs-toggle="tab"
                                data-bs-target="#identification" type="button" role="tab" aria-controls="home"
                                aria-selected="true">
                            Identification <i class="fas fa-lightbulb light" v-if="done1"></i> <i
                                class="fas fa-check-circle green" v-if="!done1"></i>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="coordonnee-tab" data-bs-toggle="tab" data-bs-target="#coordonnee"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">Coordonnée <i
                                class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="inscription-tab" data-bs-toggle="tab" data-bs-target="#inscription"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Inscription <i
                                class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="etudes-tab" data-bs-toggle="tab" data-bs-target="#etudes"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Etudes
                            Secondaires <i class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pieces-tab" data-bs-toggle="tab" data-bs-target="#pieces"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Pieces Jointes <i
                                class="fas fa-lightbulb light"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="confirmation-tab" data-bs-toggle="tab"
                                data-bs-target="#confirmation" type="button" role="tab" aria-controls="contact"
                                aria-selected="false">Confirmation <i class="fas fa-lightbulb light"></i></button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="identification" role="tabpanel"
                         aria-labelledby="home-tab">
                        <form class="row g-3 p-3" @submit.prevent="addProduct">
                            @csrf
                            <div class="col-md-6">
                                <label for="surname" class="form-label">Surname</label>
                                <input type="text" class="form-control" id="surname" v-model="product.surname" required>
                                <div id="surnameHelp" class="form-text">like This JOHN DOE</div>
                            </div>
                            <div class="col-md-6">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="text" class="form-control" id="firstname" v-model="product.firstname"
                                       required>
                                <div id="firstnameHelp" class="form-text">like This JOHN DOE</div>
                            </div>
                            <div class="col-md-6">
                                <p>Title</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="mr" value="Mr"
                                           v-model="product.title">
                                    <label class="form-check-label" for="mr">Mr</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" id="mrs" value="Mrs"
                                           v-model="product.title">
                                    <label class="form-check-label" for="mrs">Mrs</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="previousname" class="form-label">Previous Name</label>
                                <input type="text" class="form-control" id="previousname"
                                       v-model="product.previousname">
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
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                       required v-model="product.email">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                </div>
                                <!--                                </div>-->
                            </div>
                            <div class="col-md-6">
                                <p>Gender</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" checked id="male"
                                           value="male" v-model="product.gender">
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                           value="female" v-model="product.gender">
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
                        <form class="row g-3 p-3" @submit.prevent="updateProduct">
                            @method('PUT')
                            @csrf
                            <div class="col-md-12">
                                <label for="nationality" class="form-label">Nationality</label>
                                <input type="text" class="form-control" id="nationality" v-model="student2.nationaliti"
                                       required>
                            </div>
                            <div class="col-md-6">
                                <label for="cob" class="form-label">Country Of Birth</label>
                                <input type="text" class="form-control" id="cob" required v-model="student2.cob">
                            </div>
                            <div class="col-md-6">
                                <label for="coob" class="form-label">City Of Birth</label>
                                <input type="text" class="form-control" id="coob" required v-model="student2.coob">
                            </div>
                            <div class="col-md-12">
                                <label for="residence" class="form-label">Country Of Permanent Residence</label>
                                <input type="text" class="form-control" id="residence" required
                                       v-model="student2.residence">
                            </div>
                            <div class="col-md-12">
                                <label for="funding" class="form-label">Proposed source of academic funding</label>
                                <input type="text" class="form-control" id="funding" required
                                       v-model="student2.funding">
                            </div>
                            <div class="col-12">
                                <button type="reset" class="btn btn-danger btn-sm float-right">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm float-right mr-3">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="inscription" role="tabpanel" aria-labelledby="contact-tab">
                        <form class="row g-3 p-3" @submit.prevent="updateProductTwo">
                            @method('PUT')
                            @csrf
                            <div class="row px-4">
                                <h5 class="text-center mb-4 mt-3 font-weight-bolder">HND & DEGREE PROGRAMS, tick the
                                    appropriate program</h5>
                                <div class="form-check col-md-6 mb-3">
                                    <input class="form-check-input" type="radio" name="programs" id="1" value="1"
                                           checked v-model="student4.programs">
                                    <label class="form-check-label" for="1">
                                        MEDICAL LABORATORY TECHNOLOGY
                                    </label>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input class="form-check-input" type="radio" name="programs" id="2" value="2"
                                           v-model="student4.programs">
                                    <label class="form-check-label" for="2">
                                        BIOANALYTICS
                                    </label>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input class="form-check-input" type="radio" name="programs" id="3" value="3"
                                           v-model="student4.programs">
                                    <label class="form-check-label" for="3">
                                        FOOD TECHNOLOGY
                                    </label>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input class="form-check-input" type="radio" name="programs" id="4" value="4"
                                           v-model="student4.programs">
                                    <label class="form-check-label" for="4">
                                        AGRICULTURAL BIOTECHNOLOGY
                                    </label>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input class="form-check-input" type="radio" name="programs" id="5" value="5"
                                           v-model="student4.programs">
                                    <label class="form-check-label" for="5">
                                        ENVIRONMENTAL MANAGEMENT
                                    </label>
                                </div>
                                <div class="form-check col-md-6 mb-3">
                                    <input class="form-check-input" type="radio" name="programs" id="6" value="6"
                                           v-model="student4.programs">
                                    <label class="form-check-label" for="6">
                                        CORPORATE COMMUNICATION TECHNOLOGY
                                    </label>
                                </div>
                            </div>
                            <div class="row px-4">
                                <h5 class="text-center mb-2 mt-4 font-weight-bolder">SPECIAL NEEDS</h5>
                                <p class="text-center mb-3 mt-3 font-weight-bolder">
                                    Please tick the appropriate box if you have a physical or sensory disability which
                                    might affect your studies
                                    or may require special accommodation. The information will NOT prejudice
                                    your application but will enable us make appropriate arrangements to support our
                                    studies.
                                </p>
                                <div class="row px-3">
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="00" value="00"
                                               v-on:click="addValue(1)">
                                        <label class="form-check-label" for="00">No disability</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="A" value="A"
                                               v-on:click="addValue(2)">
                                        <label class="form-check-label" for="A">Specific learning disability</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="B" value="B"
                                               v-on:click="addValue(3)">
                                        <label class="form-check-label" for="B">Blind or partially sighted</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="C" value="C"
                                               v-on:click="addValue(4)">
                                        <label class="form-check-label" for="C">Deaf or hard of hearing</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="D" value="D"
                                               v-on:click="addValue(5)">
                                        <label class="form-check-label" for="D">Wheelchair user or mobility
                                            difficulties</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="E" value="E"
                                               v-on:click="addValue(6)">
                                        <label class="form-check-label" for="E">Personal care support</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="F" value="F"
                                               v-on:click="addValue(7)">
                                        <label class="form-check-label" for="F">Mental health difficulties</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="G" value="G"
                                               v-on:click="addValue(8)">
                                        <label class="form-check-label" for="G">An unseen disability</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="H" value="H"
                                               v-on:click="addValue(9)">
                                        <label class="form-check-label" for="H">Multiple disabilities</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="I" value="I"
                                               v-on:click="addValue(10)">
                                        <label class="form-check-label" for="I">A disability not mentioned</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="J" value="J"
                                               v-on:click="addValue(11)">
                                        <label class="form-check-label" for="J">Autistic spectrum disorder</label>
                                    </div>
                                    <div class="form-check col-md-4 mb-3">
                                        <input class="form-check-input" type="checkbox" name="needs" id="O" value="O"
                                               v-on:click="addValue(12)">
                                        <label class="form-check-label" for="O">Others</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5 class="mb-3 text-center font-weight-bolder">DATA PROTECTION</h5>
                                <p class="text-center">
                                    The information contained on this form will be used for administrative purpose and
                                    to process your application.
                                </p>
                                <h5 class="mt-2 mb-3 text-center font-weight-bolder">Criminal convictions</h5>
                                <p class="mb-3 text-center">
                                    To help the university reduce the risk of harm or injury to its students and faculty
                                    caused by the behavior
                                    of other students, you are required to disclose any criminal conviction/s/ records.
                                    Relevant criminal convictions are only those conviction/s/ for offences against the
                                    person,
                                    whether of a violent or sexual nature, and convictions for offences involving
                                    unlawfully supplying controlled
                                    drugs or substances where the conviction concerns commercial drug dealing or
                                    trafficking.
                                </p>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="form-check form-check-inline ml-4">
                                        Select <strong class="mx-2">Yes</strong> if you have any criminal conviction to
                                        declare, otherwise select <strong class="mx-2">No</strong>
                                        <input class="form-check-input ml-4" type="radio" name="criminal" id="oui"
                                               value="true" v-model="student4.criminal">
                                        <label class="form-check-label" for="oui">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="criminal" id="no"
                                               value="false" v-model="student4.criminal">
                                        <label class="form-check-label" for="no">No</label>
                                    </div>
                                    <p class="ml-4 mt-3">
                                        If you indicate <strong class="mx-2">Yes</strong> you may be required to provide
                                        details to the university
                                    </p>
                                    <div class="form-floating mx-4">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="reason"
                                                  style="height: 100px" v-model="student4.reason"></textarea>
                                        <label for="reason">Please give details of your conviction[s] here</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="reset" class="btn btn-danger btn-sm float-right">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm float-right mr-3">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="etudes" role="tabpanel" aria-labelledby="contact-tab">
                        <form class="row g-3 p-3" @submit.prevent="updateProductThree">
                            @method('PUT')
                            @csrf
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="form-check form-check-inline ml-4">
                                        <strong class="mx-2">NOTE:</strong> SUBMIT THE LATEST COPY OF YOUR RESUME (CV)
                                        WITH YOUR APPLICATION PACKAGE
                                    </div>
                                    <div class="mx-md-4">
                                        <table class="table">
                                            <thead class="table-dark">
                                            <tr>
                                                <th scope="col">NAME OF INSTITUTION/STATE OR PROVINCE /COUNTRY</th>
                                                <th scope="col">DATES OF ATTENDANCE FROM MONTH/YEAR TO MY</th>
                                                <th scope="col">DEGREE AWARDED/EXPECTED</th>
                                                <th scope="col">MAJOR</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="ins1"
                                                           v-model="student3.ins1">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="date1"
                                                           v-model="student3.date1">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="degree1"
                                                           v-model="student3.degree1">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="major1"
                                                           v-model="student3.major1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="ins2"
                                                           v-model="student3.ins2">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="date2"
                                                           v-model="student3.date2">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="degree2"
                                                           v-model="student3.degree2">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="major2"
                                                           v-model="student3.major2">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="ins3"
                                                           v-model="student3.ins3">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="date3"
                                                           v-model="student3.date3">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="degree3"
                                                           v-model="student3.degree3">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="major3"
                                                           v-model="student3.major3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="ins4"
                                                           v-model="student3.ins4">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="date4"
                                                           v-model="student3.date4">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="degree4"
                                                           v-model="student3.degree4">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="major4"
                                                           v-model="student3.major4">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="ins5"
                                                           v-model="student3.ins5">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="date5"
                                                           v-model="student3.date5">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="degree5"
                                                           v-model="student3.degree5">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="major5"
                                                           v-model="student3.major5">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <div class="form-check form-check-inline ml-4">
                                            What is/was your undergraduate grade point average?........out of……e.g. 3.2
                                            out of 4 or 12 out of 20
                                            <br>
                                            What is/was your graduate grade point average? Out of …….. e.g. 3.2 out of 4
                                            or 12 out of 20
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="reset" class="btn btn-danger btn-sm float-right">Cancel</button>
                                <button type="submit" class="btn btn-success btn-sm float-right mr-3">Save</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pieces" role="tabpanel" aria-labelledby="contact-tab">

                    </div>
                    <div class="tab-pane fade" id="confirmation" role="tabpanel" aria-labelledby="contact-tab">...</div>
                </div>

            </div>
        </div>
    </div>
    <script>
        const appone = new Vue({
            el: '#appone',
            data() {
                return {
                    done1: true,

                    modif: false,

                    user: {!! Auth::user()->toJson() !!},

                    product: {},

                    student: {},

                    student2: {},

                    student3: {},

                    student4: {
                        needs: [],
                        need: ''
                    }
                }
            },
            created() {
                axios.get('http://localhost:8000/students')
                    .then(function (response) {
                        this.student = response.data;
                        let test = response.data;
                        for (let i = 0; i < test.length; i++) {
                            if (test[i].firstname !== undefined && test[i].user_id !== undefined) {
                                this.done1 = false
                                this.modif = true
                            } else {
                                console.log('depasse')
                            }
                        }
                    }).catch(err => console.log(err));

            },
            methods: {
                addProduct() {
                    axios.post('/students', this.product)
                        .then(function (response) {
                            if (response.data === 'Product created!') {
                                this.done1 = false
                            }
                            window.location = window.location
                        })
                        .catch(function (error) {
                            console.log(error);
                        }).finally(() => this.loading = false);
                },
                updateProduct() {
                    // console.log(this.modif)
                    // if (this.modif) {
                    axios.put('/students/' + {!! Auth::id() !!} , this.student2)
                        .then(function (response) {
                            window.location = window.location
                        })
                        .catch(function (error) {
                            console.log(error);
                        }).finally(() => this.loading = false);
                    // }
                },
                updateProductTwo() {
                    // console.log(this.modif)
                    // if (this.modif) {
                    axios.put('/students/step-two/' + {!! Auth::id() !!} , this.student4)
                        .then(function (response) {
                            window.location = window.location
                        })
                        .catch(function (error) {
                            console.log(error);
                        }).finally(() => this.loading = false);
                    // }
                },
                updateProductThree() {
                    // console.log(this.modif)
                    // if (this.modif) {
                    axios.put('/students/step-three/' + {!! Auth::id() !!} , this.student3)
                        .then(function (response) {
                            window.location = window.location
                        })
                        .catch(function (error) {
                            console.log(error);
                        }).finally(() => this.loading = false);
                    // }
                },

                addValue(val) {
                    let arr = this.student4.needs
                    if (!arr.includes(val)) {
                        arr.push(val);
                    } else {
                        arr.splice(arr.indexOf(val), 1);  //deleting
                    }
                    this.student4.need = JSON.stringify(arr)
                }

            },
            mounted() {
                console.log('Component mounted.')
            }
        });
    </script>
@endsection

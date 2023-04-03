@extends('layouts.header')

@section('content')

    <main>
        <section class="slider-container pt-5">
            <div class="position-relative">
                <div>
                    <img src="bundles/images/original/blogpics01.png" alt="" class="img-fluid">
                </div>
                <div style="width: 60%;"
                    class="position-absolute bottom-0 start-50 translate-middle-x  pt-4 px-5 bg-light">
                    <h4 class="fw-bold text-center">Contact Us </h4>
                </div>
            </div>
        </section>



        <section class="adjust">
            <div class="container px-16">
                <div class="container-fluid my-5">
                    <section class="mb-5">
                        <div class="pb-5" style="color: black;">
                            <div class="px-3 my-5">
                                <p class="fst-italic fw-semibold">
                                    Our team was handpicked for their understanding of materials, process and passion
                                    for fashion. Whether you are browsing our site or visiting our store, we are always
                                    willing to share our deep knowledge and understanding of our makers and their craft.
                                </p>
                                <p>The most commonly asked questions are covered in Our FAQs. If you have any specific
                                    questions please do not hesitate to contact us by completing this form or calling
                                    our customer services team on 778 568 999.
                                </p>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class=" container">
                                            <form id="contact-form">
                                                <div class="mb-3">
                                                    <label for="contactName" class="form-label">Your Name
                                                        (required)</label>
                                                    <input type="email" name="contactName" class="form-control"
                                                        id="contactName" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="contactEmail" class="form-label">Your Email
                                                        (required)</label>
                                                    <input type="password" name="contactEmail" class="form-control"
                                                        id="contactEmail">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="commentSubject" class="form-label">Subject</label>
                                                    <input type="password" name="commentSubject" class="form-control"
                                                        id="commentSubject">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="contactComment">Comments</label>
                                                    <textarea name="contactComment" class="form-control"
                                                        placeholder="Comment" id="contactComment"></textarea>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="container">
                                            <div
                                                style="background-color: #EBF5FA; padding-top: 3rem; padding-bottom: 2.5rem; padding-left: 1rem;">
                                                <div class=" ps-4 my-4">
                                                    <p class="fw-bold mb-2">STORE ADDRESS</p>
                                                    <p>17 Irving Pl, Abuja Nigeria.</p>
                                                </div>
                                                <div class=" ps-4 my-4">
                                                    <p class="fw-bold mb-2">OPENING HOURS</p>
                                                    <p>Monday – Saturday 10AM to 5PM</p>
                                                </div>
                                                <div class=" ps-4 my-4">
                                                    <p class="fw-bold mb-2">TELEPHONE</p>
                                                    <p>778 568 999</p>
                                                </div>
                                                <div class=" ps-4 my-4">
                                                    <p class="fw-bold mb-2">EMAIL</p>
                                                    <p>care@gallerbebe.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <div class="my-slider">
                        <div><img src="bundles/images/landing/HIPSTER.png" alt=""></div>
                        <div><img src="bundles/images/landing/VONDE.png" alt=""></div>
                        <div><img src="bundles/images/landing/norway.png" alt=""></div>
                        <div><img src="bundles/images/landing/avante.png" alt=""></div>
                        <div><img src="bundles/images/landing/matuska.png" alt=""></div>
                        <div><img src="bundles/images/landing/tylertone.png" alt=""></div>
                        <div><img src="bundles/images/landing/neoquen.png" alt=""></div>
                        <div><img src="bundles/images/landing/orange.png" alt=""></div>
                        <div><img src="bundles/images/landing/HIPSTER.png" alt=""></div>
                        <div><img src="bundles/images/landing/VONDE.png" alt=""></div>
                        <div><img src="bundles/images/landing/norway.png" alt=""></div>
                        <div><img src="bundles/images/landing/avante.png" alt=""></div>
                        <div><img src="bundles/images/landing/matuska.png" alt=""></div>
                        <div><img src="bundles/images/landing/tylertone.png" alt=""></div>
                        <div><img src="bundles/images/landing/neoquen.png" alt=""></div>
                        <div><img src="bundles/images/landing/orange.png" alt=""></div>
                    </div>
                </div>
            </div>
        </section>


    </main>

@endsection
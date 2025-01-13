<div class="col-12">
    <!-- Title -->
    <h1 class="mb-0 h3">ایجاد خبر جدید</h1>
</div>
<div class="col-12">
    <!-- Chart START -->
    <div class="card border">
        <!-- Card body -->
        <div class="card-body">
            <!-- Form START -->
            <form>
                <!-- Main form -->
                <div class="row">
                    <div class="col-12">
                        <!-- Post name -->
                        <div class="mb-3">
                            <label class="form-label">عنوان</label>
                            <input required id="con-name" name="name" type="text" class="form-control"
                                   placeholder="عنوان خبر">
                            <small>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                گرافیک است.</small>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">نوع</label>
                            <div class="d-flex flex-wrap gap-3">
                                <!-- Post type item -->
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="poll" id="option">
                                    <label class="btn btn-outline-light w-100" for="option">
                                        <i class="bi bi-chat-left-text fs-1"></i>
                                        <span class="d-block"> فوری</span>
                                    </label>
                                </div>
                                <!-- Post type item -->
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="poll" id="option2">
                                    <label class="btn btn-outline-light w-100" for="option2">
                                        <i class="bi bi-patch-question fs-1"></i>
                                        <span class="d-block"> حوادث </span>
                                    </label>
                                </div>
                                <!-- Post type item -->
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="poll" id="option3" checked>
                                    <label class="btn btn-outline-light w-100" for="option3">
                                        <i class="bi bi-chat-right-dots fs-1"></i>
                                        <span class="d-block"> خبری </span>
                                    </label>
                                </div>
                                <!-- Post type item -->
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="poll" id="option4">
                                    <label class="btn btn-outline-light w-100" for="option4">
                                        <i class="bi bi-ui-checks-grid fs-1"></i>
                                        <span class="d-block"> متنی </span>
                                    </label>
                                </div>
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="poll" id="option5">
                                    <label class="btn btn-outline-light w-100" for="option5">
                                        <i class="bi bi-camera-reels fs-1"></i>
                                        <span class="d-block"> چندرسانه ای </span>
                                    </label>
                                </div>
                                <!-- Post type item -->
                                <div class="flex-fill">
                                    <input type="radio" class="btn-check" name="poll" id="option6">
                                    <label class="btn btn-outline-light w-100" for="option6">
                                        <i class="bi bi-chat-square fs-1"></i>
                                        <span class="d-block"> سایر </span>
                                    </label>
                                </div>
                                <!-- Post type item -->
                            </div>
                        </div>
                    </div>
                    <!-- Post type END -->
                    <!-- Short description -->
                    <div class="col-12">
                        <div class="mb-3">
                            <label class="form-label">توضیح مختصر</label>
                            <textarea class="form-control" rows="3"
                                      placeholder="توضیح مختصری را درباره خبر بنویسید..."></textarea>
                        </div>
                    </div>
                    <!-- Main toolbar -->
                    <div class="col-md-12">
                        <!-- Subject -->
                        <div class="mb-3">
                            <label class="form-label">متن خبر</label>
                            <!-- Editor toolbar -->
                            <div class="bg-light border border-bottom-0 rounded-top py-3" id="quilltoolbar">
                        <span class="ql-formats">
                          <select class="ql-size"></select>
                        </span>
                                <span class="ql-formats">
                          <button class="ql-bold"></button>
                          <button class="ql-italic"></button>
                          <button class="ql-underline"></button>
                          <button class="ql-strike"></button>
                        </span>
                                <span class="ql-formats">
                          <select class="ql-color"></select>
                          <select class="ql-background"></select>
                        </span>
                                <span class="ql-formats">
                          <button class="ql-code-block"></button>
                        </span>
                                <span class="ql-formats">
                          <button class="ql-list" value="ordered"></button>
                          <button class="ql-list" value="bullet"></button>
                          <button class="ql-indent" value="-1"></button>
                          <button class="ql-indent" value="+1"></button>
                        </span>
                                <span class="ql-formats">
                          <button class="ql-link"></button>
                          <button class="ql-image"></button>
                        </span>
                                <span class="ql-formats">
                          <button class="ql-clean"></button>
                        </span>


                            </div>
                            <!-- Main toolbar -->

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <!-- Image -->
                            <div class="position-relative">
                                <h6 class="my-2">آپلود تصویر شاخص<a href="#!" class="text-primary"> آپلود از کامپیوتر</a></h6>
                                <label class="w-100" style="cursor:pointer;">
                                    <div class="input-group flex-row-reverse">
                                        <input type="text" class="form-control upload-name"/>
                                        <span class="btn btn-custom cursor-pointer upload-button">آپلود فایل</span>
                                    </div>
                                    <input class="form-control stretched-link d-none hidden-upload" type="file" name="my-image" accept="image/gif, image/jpeg, image/png"/>
                                </label>

                            </div>
                            <p class="small mb-0 mt-2"><b>نکته:</b> فرمت های مجاز: JPG، JPEG و PNG و ابعاد پیشنهادی ما 600px * 450px است. تصاویر بزرگتر به اندازه 4:3 برش داده می شود تا با تصاویر کوچک/پیش نمایش ما مطابقت داشته باشد.</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <!-- Tags -->
                        <div class="mb-3">
                            <label class="form-label">برچسب</label>
                            <textarea class="form-control" rows="1" placeholder="ورزش، اقتصاد، ..."></textarea>
                            <small>حداکثر 14 کلمه کلیدی، کلمات کلیدی باید با حروف کوچک و با کاما از هم جدا شوند. به عنوان مثال، جاوا اسکریپت، واکنش، بازاریابی</small>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Message -->
                        <div class="mb-3">
                            <label class="form-label">دسته بندی</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>اقتصاد</option>
                                <option value="1">تکنولوژی</option>
                                <option value="2">رسانه</option>
                                <option value="3">گردشگری</option>
                                <option value="4">ورزش</option>
                                <option value="5">سیاست</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="postCheck">
                            <label class="form-check-label" for="postCheck">
                                این خبر ویژه شود؟
                            </label>
                        </div>
                    </div>
                    <!-- Create post button -->
                    <div class="col-md-12 text-start">
                        <button class="btn btn-primary w-100" type="submit">ایجاد خبر</button>
                    </div>
                </div>
            </form>
            <!-- Form END -->
        </div>
    </div>
    <!-- Chart END -->
</div>

</div>
</div>

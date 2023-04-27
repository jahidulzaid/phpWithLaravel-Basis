<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Category">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#category" type="button"><i class="bi bi-grid-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Authors">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#author" type="button"><i class="bi bi-people-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Blogs">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-blog" type="button"><i class="bi bi-file-earmark-text"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('admin-asset')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('dashboard')}}" class="list-group-item"><i class="bi bi-cart-plus"></i>DashBoard</a>

                </div>
            </div>
            <div class="tab-pane fade" id="category">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Category</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add-category')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add Category</a>
                    <a href="{{route('manage-category')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage Category</a>

                </div>
            </div>
            <div class="tab-pane fade" id="author">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Author</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add-author')}}" class="list-group-item"><i class="bi bi-person-add"></i>Add Author</a>
                    <a href="{{route('manage-author')}}" class="list-group-item"><i class="bi bi-person-bounding-box"></i>Manage Author</a>

                </div>
            </div>

            <div class="tab-pane fade" id="pills-blog">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Blog</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add-blog')}}" class="list-group-item"><i class="bi bi-card-text"></i>Add Blog</a>
                    <a href="{{route('manage-blog')}}" class="list-group-item"><i class="bi bi-card-text"></i>Manage Blog</a>

                </div>
            </div>

        </div>
    </div>
</aside>

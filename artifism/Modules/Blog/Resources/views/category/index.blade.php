@extends('admin.layouts.app')
@section('page_title', __('Blog Category'))
@section('css')
    <link rel="stylesheet" href="{{ asset('Modules/Blog/Resources/assets/css/blog.min.css') }}">
@endsection
@section('content')
    <!-- Main content -->
    <div class="col-sm-12 list-container" id="item-list-container">
        <div class="card">
            <div class="card-header bb-none pb-0">
                <h5>{{ __('Blog Category') }}</h5>
                <x-backend.group-filters :groups="$groups" :column="'status'" />
                <div class="card-header-right my-2 mx-md-0 mx-sm-4">
                    <x-backend.button.batch-delete class="me-1" />
                    @if (in_array('Modules\Blog\Http\Controllers\BlogCategoryController@store', $prms))
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add-category-name"
                            class="add-payment-term btn btn-outline-primary mb-0 custom-btn-small"><span class="fa fa-plus">
                                &nbsp;</span>{{ __('Add :x', ['x' => __('Category')]) }}</a>
                    @endif
                    <x-backend.button.export  class="me-1"/>
                    <x-backend.button.filter class="me-0" />
                </div>
            </div>
            <x-backend.datatable.filter-panel class="mx-1">
                <div class="col-md-8">
                    <x-backend.datatable.input-search />
                </div>
                <div class="col-md-4">
                    <select class="select2-hide-search filter" name="status">
                      <option value="">{{ __('All Status') }}</option>
                      <option value="Active">{{ __('Active') }}</option>
                      <option value="Inactive">{{ __('Inactive') }}</option>
                    </select>
                </div>
            </x-backend.datatable.filter-panel>
            <x-backend.datatable.table-wrapper class="user-list-wallet user-list-processing-message need-batch-operation"
                data-namespace="Modules\Blog\Http\Models\BlogCategory" data-column="id">
                @include('admin.layouts.includes.yajra-data-table')
            </x-backend.datatable.table-wrapper>
            @include('admin.layouts.includes.delete-modal')
        </div>
    </div>
    <div id="add-category-name" class="modal fade display_none" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add :x', ['x' => __('Category')]) }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('blog.category.store') }}" method="post" id="addPaymentForm"
                    class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-4 control-label require"
                                for="store-term">{{ __('Category Name') }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control inputFieldDesign" name="name" placeholder="{{ __('Name') }}"
                                    id="store-term" required minlength="3"
                                    oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">{{ __('Status') }}</label>
                            <div class="col-sm-7">
                                <input type="hidden" name="status" value="Inactive">
                                <div class="switch switch-bg d-inline m-r-10">
                                    <input class="is_default" type="checkbox" name="status" value="Active" id="is_default"
                                        checked>
                                    <label for="is_default" class="cr"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-0">
                        <div class="form-group row">
                            <label for="btn_save" class="col-sm-3 control-label"></label>
                            <div class="col-sm-12 margin-bottom-8px">
                                <button type="submit"
                                    class="py-2 custom-btn-submit ms-2 float-right">{{ __('Create') }}</button>
                                <button type="button" class="py-2 custom-btn-cancel float-right"
                                    data-bs-dismiss="modal">{{ __('Close') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="edit-payment" class="modal fade display_none" aria-modal="true" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Edit :x', ['x' => __('Category Name')]) }}</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('blog.category.update') }}" method="post" id="edit-payment-form"
                    class="form-horizontal">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" class="edit-id" id="edit-id" name="id">

                        <div class="form-group row">
                            <label class="col-sm-4 control-label require"
                                for="store-term">{{ __('Category Name') }}</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control inputFieldDesign" name="name"
                                    placeholder="{{ __('Name') }}" id="name" required
                                    minlength="3"
                                    oninvalid="this.setCustomValidity('{{ __('This field is required.') }}')">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 control-label">{{ __('Status') }}</label>
                            <div class="col-sm-7">
                                <input type="hidden" name="status" value="Inactive">
                                <div class="switch switch-bg d-inline m-r-10">
                                    <input class="is_default" type="checkbox" name="status"
                                        id="edit_status">
                                    <label for="is_default" class="cr"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer py-0">
                        <div class="form-group row">
                            <label for="btn_save" class="col-sm-3 control-label"></label>
                            <div class="col-sm-12 margin-bottom-8px">
                                <button type="submit"
                                    class="py-2 ms-2 custom-btn-submit float-right">{{ __('Update') }}</button>
                                <button type="button" class="py-2 custom-btn-cancel float-right"
                                    data-bs-dismiss="modal">{{ __('Close') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        'use strict';
        var pdf = "{{ in_array('Modules\Blog\Http\Controllers\BlogCategoryController@pdf', $prms) ? '1' : '0' }}";
        var csv = "{{ in_array('Modules\Blog\Http\Controllers\BlogCategoryController@csv', $prms) ? '1' : '0' }}";
        var listContaner = "item-list-container";
        var endRoute = "/blog-category/";
    </script>
    <script src="{{ asset('Modules/Blog/Resources/assets/js/blog-category.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/validation.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/yajra-export.min.js') }}"></script>
    <script src="{{ asset('public/dist/js/custom/document-list.min.js') }}"></script>
@endsection

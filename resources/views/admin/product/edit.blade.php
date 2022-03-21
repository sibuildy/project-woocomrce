@extends('voyager::master')

@section('css')
    <style></style>
@stop

@section('page_title', 'Your title')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">

            <i class="icon voyager-shop"></i> Product Sync site
        </h1>
        <a class="btn btn-success btn-add-new" href="/admin/Product/create"> <i class="voyager-plus"></i> <span>Add
                New</span></a>

    </div>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form" action="http://localhost:8000/admin/posts/1" method="POST"
            enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="9p559650L55t7cba777CPIAvpXwOeGpnGDhvxYj7">

            <div class="row">
                <div class="col-md-8">
                    <!-- ### TITLE ### -->
                    <div class="panel">

                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="voyager-character"></i> Post Title
                                <span class="panel-desc"> The title for your post</span>
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                    aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                value="Lorem Ipsum Post">
                        </div>
                    </div>

                    <!-- ### CONTENT ### -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Post Content</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen"
                                    aria-hidden="true"></a>
                            </div>
                        </div>

                        <div class="panel-body">
                            <textarea class="form-control richTextBox" name="body" id="richtextbody" aria-hidden="true" style="display: none;">    &lt;p&gt;This is the body of the lorem ipsum post&lt;/p&gt;
    </textarea>
                            <div role="application" class="tox tox-tinymce" aria-disabled="false"
                                style="visibility: hidden; height: 600px;">
                                <div class="tox-editor-container">
                                    <div data-alloy-vertical-dir="toptobottom" class="tox-editor-header">
                                        <div role="group" class="tox-toolbar-overlord" aria-disabled="false">
                                            <div role="group" class="tox-toolbar__primary">
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button title="Formats" aria-label="Formats"
                                                        aria-haspopup="true" type="button" tabindex="-1" unselectable="on"
                                                        class="tox-tbtn tox-tbtn--select tox-tbtn--bespoke"
                                                        aria-expanded="false" style="user-select: none;"><span
                                                            class="tox-tbtn__select-label">Paragraph</span>
                                                        <div class="tox-tbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Bold" title="Bold"
                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-disabled="false" aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <path
                                                                    d="M7.8 19c-.3 0-.5 0-.6-.2l-.2-.5V5.7c0-.2 0-.4.2-.5l.6-.2h5c1.5 0 2.7.3 3.5 1 .7.6 1.1 1.4 1.1 2.5a3 3 0 01-.6 1.9c-.4.6-1 1-1.6 1.2.4.1.9.3 1.3.6s.8.7 1 1.2c.4.4.5 1 .5 1.6 0 1.3-.4 2.3-1.3 3-.8.7-2.1 1-3.8 1H7.8zm5-8.3c.6 0 1.2-.1 1.6-.5.4-.3.6-.7.6-1.3 0-1.1-.8-1.7-2.3-1.7H9.3v3.5h3.4zm.5 6c.7 0 1.3-.1 1.7-.4.4-.4.6-.9.6-1.5s-.2-1-.7-1.4c-.4-.3-1-.4-2-.4H9.4v3.8h4z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Italic" title="Italic"
                                                        type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-disabled="false" aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <path
                                                                    d="M16.7 4.7l-.1.9h-.3c-.6 0-1 0-1.4.3-.3.3-.4.6-.5 1.1l-2.1 9.8v.6c0 .5.4.8 1.4.8h.2l-.2.8H8l.2-.8h.2c1.1 0 1.8-.5 2-1.5l2-9.8.1-.5c0-.6-.4-.8-1.4-.8h-.3l.2-.9h5.8z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Underline"
                                                        title="Underline" type="button" tabindex="-1" class="tox-tbtn"
                                                        aria-disabled="false" aria-pressed="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <path
                                                                    d="M16 5c.6 0 1 .4 1 1v5.5a4 4 0 01-.4 1.8l-1 1.4a5.3 5.3 0 01-5.5 1 5 5 0 01-1.6-1c-.5-.4-.8-.9-1.1-1.4a4 4 0 01-.4-1.8V6c0-.6.4-1 1-1s1 .4 1 1v5.5c0 .3 0 .6.2 1l.6.7a3.3 3.3 0 002.2.8 3.4 3.4 0 002.2-.8c.3-.2.4-.5.6-.8l.2-.9V6c0-.6.4-1 1-1zM8 17h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group">
                                                    <div aria-pressed="false" aria-label="Text color" title="Text color"
                                                        role="button" aria-haspopup="true" tabindex="-1" unselectable="on"
                                                        class="tox-split-button" aria-disabled="false" aria-expanded="false"
                                                        aria-describedby="aria_6537605031681647834778999"
                                                        style="user-select: none;"><span role="presentation"
                                                            class="tox-tbtn" aria-disabled="false"><span
                                                                class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                    height="24" focusable="false">
                                                                    <g fill-rule="evenodd">
                                                                        <path id="tox-icon-text-color__color"
                                                                            d="M3 18h18v3H3z" fill="#000000"></path>
                                                                        <path
                                                                            d="M8.7 16h-.8a.5.5 0 01-.5-.6l2.7-9c.1-.3.3-.4.5-.4h2.8c.2 0 .4.1.5.4l2.7 9a.5.5 0 01-.5.6h-.8a.5.5 0 01-.4-.4l-.7-2.2c0-.3-.3-.4-.5-.4h-3.4c-.2 0-.4.1-.5.4l-.7 2.2c0 .3-.2.4-.4.4zm2.6-7.6l-.6 2a.5.5 0 00.5.6h1.6a.5.5 0 00.5-.6l-.6-2c0-.3-.3-.4-.5-.4h-.4c-.2 0-.4.1-.5.4z">
                                                                        </path>
                                                                    </g>
                                                                </svg></span></span><span role="presentation"
                                                            class="tox-tbtn tox-split-button__chevron"
                                                            aria-disabled="false"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span><span aria-hidden="true"
                                                            id="aria_6537605031681647834778999" style="display: none;">To
                                                            open the popup, press Shift+Enter</span></div>
                                                    <div aria-pressed="false" aria-label="Background color"
                                                        title="Background color" role="button" aria-haspopup="true"
                                                        tabindex="-1" unselectable="on" class="tox-split-button"
                                                        aria-disabled="false" aria-expanded="false"
                                                        aria-describedby="aria_4236296191701647834779004"
                                                        style="user-select: none;"><span role="presentation"
                                                            class="tox-tbtn" aria-disabled="false"><span
                                                                class="tox-icon tox-tbtn__icon-wrap"><svg width="24"
                                                                    height="24" focusable="false">
                                                                    <g fill-rule="evenodd">
                                                                        <path id="tox-icon-highlight-bg-color__color"
                                                                            d="M3 18h18v3H3z" fill="#000000"></path>
                                                                        <path fill-rule="nonzero"
                                                                            d="M7.7 16.7H3l3.3-3.3-.7-.8L10.2 8l4 4.1-4 4.2c-.2.2-.6.2-.8 0l-.6-.7-1.1 1.1zm5-7.5L11 7.4l3-2.9a2 2 0 012.6 0L18 6c.7.7.7 2 0 2.7l-2.9 2.9-1.8-1.8-.5-.6">
                                                                        </path>
                                                                    </g>
                                                                </svg></span></span><span role="presentation"
                                                            class="tox-tbtn tox-split-button__chevron"
                                                            aria-disabled="false"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span><span aria-hidden="true"
                                                            id="aria_4236296191701647834779004" style="display: none;">To
                                                            open the popup, press Shift+Enter</span></div>
                                                </div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Align left"
                                                        title="Align left" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 4h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2zm0-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Align center"
                                                        title="Align center" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm3 4h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 110-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1H8a1 1 0 010-2zm-3-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Align right"
                                                        title="Align right" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M5 5h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 110-2zm6 4h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 8h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm-6-4h14c.6 0 1 .4 1 1s-.4 1-1 1H5a1 1 0 010-2z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Bullet list"
                                                        title="Bullet list" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M11 5h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0 6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zM4.5 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1zm0 6c0-.4.1-.8.4-1 .3-.4.7-.5 1.1-.5.4 0 .8.1 1 .4.4.3.5.7.5 1.1 0 .4-.1.8-.4 1-.3.4-.7.5-1.1.5-.4 0-.8-.1-1-.4-.4-.3-.5-.7-.5-1.1z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Numbered list"
                                                        title="Numbered list" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M10 17h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 010-2zm0-6h8c.6 0 1 .4 1 1s-.4 1-1 1h-8a1 1 0 110-2zM6 4v3.5c0 .3-.2.5-.5.5a.5.5 0 01-.5-.5V5h-.5a.5.5 0 010-1H6zm-1 8.8l.2.2h1.3c.3 0 .5.2.5.5s-.2.5-.5.5H4.9a1 1 0 01-.9-1V13c0-.4.3-.8.6-1l1.2-.4.2-.3a.2.2 0 00-.2-.2H4.5a.5.5 0 01-.5-.5c0-.3.2-.5.5-.5h1.6c.5 0 .9.4.9 1v.1c0 .4-.3.8-.6 1l-1.2.4-.2.3zM7 17v2c0 .6-.4 1-1 1H4.5a.5.5 0 010-1h1.2c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.4a.4.4 0 110-.8h1.3c.2 0 .3-.1.3-.3 0-.2-.1-.3-.3-.3H4.5a.5.5 0 110-1H6c.6 0 1 .4 1 1z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Decrease indent"
                                                        title="Decrease indent" type="button" tabindex="-1"
                                                        class="tox-tbtn tox-tbtn--disabled" aria-disabled="true"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <path
                                                                    d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm1.6-3.8a1 1 0 01-1.2 1.6l-3-2a1 1 0 010-1.6l3-2a1 1 0 011.2 1.6L6.8 12l1.8 1.2z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button><button aria-label="Increase indent"
                                                        title="Increase indent" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <path
                                                                    d="M7 5h12c.6 0 1 .4 1 1s-.4 1-1 1H7a1 1 0 110-2zm5 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm0 4h7c.6 0 1 .4 1 1s-.4 1-1 1h-7a1 1 0 010-2zm-5 4h12a1 1 0 010 2H7a1 1 0 010-2zm-2.6-3.8L6.2 12l-1.8-1.2a1 1 0 011.2-1.6l3 2a1 1 0 010 1.6l-3 2a1 1 0 11-1.2-1.6z"
                                                                    fill-rule="evenodd"></path>
                                                            </svg></span></button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Insert/edit link"
                                                        title="Insert/edit link" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M6.2 12.3a1 1 0 011.4 1.4l-2.1 2a2 2 0 102.7 2.8l4.8-4.8a1 1 0 000-1.4 1 1 0 111.4-1.3 2.9 2.9 0 010 4L9.6 20a3.9 3.9 0 01-5.5-5.5l2-2zm11.6-.6a1 1 0 01-1.4-1.4l2-2a2 2 0 10-2.6-2.8L11 10.3a1 1 0 000 1.4A1 1 0 119.6 13a2.9 2.9 0 010-4L14.4 4a3.9 3.9 0 015.5 5.5l-2 2z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button><button aria-label="Insert/edit image"
                                                        title="Insert/edit image" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"
                                                        aria-pressed="false"><span class="tox-icon tox-tbtn__icon-wrap"><svg
                                                                width="24" height="24" focusable="false">
                                                                <path
                                                                    d="M5 15.7l3.3-3.2c.3-.3.7-.3 1 0L12 15l4.1-4c.3-.4.8-.4 1 0l2 1.9V5H5v10.7zM5 18V19h3l2.8-2.9-2-2L5 17.9zm14-3l-2.5-2.4-6.4 6.5H19v-4zM4 3h16c.6 0 1 .4 1 1v16c0 .6-.4 1-1 1H4a1 1 0 01-1-1V4c0-.6.4-1 1-1zm6 8a2 2 0 100-4 2 2 0 000 4z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></span></button><button title="Table" aria-label="Table"
                                                        aria-haspopup="true" type="button" tabindex="-1"
                                                        data-alloy-tabstop="true" unselectable="on"
                                                        class="tox-tbtn tox-tbtn--select" aria-expanded="false"
                                                        style="user-select: none;"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <path fill-rule="nonzero"
                                                                    d="M19 4a2 2 0 012 2v12a2 2 0 01-2 2H5a2 2 0 01-2-2V6c0-1.1.9-2 2-2h14zM5 14v4h6v-4H5zm14 0h-6v4h6v-4zm0-6h-6v4h6V8zM5 12h6V8H5v4z">
                                                                </path>
                                                            </svg></span>
                                                        <div class="tox-tbtn__select-chevron"><svg width="10" height="10"
                                                                focusable="false">
                                                                <path
                                                                    d="M8.7 2.2c.3-.3.8-.3 1 0 .4.4.4.9 0 1.2L5.7 7.8c-.3.3-.9.3-1.2 0L.2 3.4a.8.8 0 010-1.2c.3-.3.8-.3 1.1 0L5 6l3.7-3.8z"
                                                                    fill-rule="nonzero"></path>
                                                            </svg></div>
                                                    </button></div>
                                                <div title="" role="toolbar" data-alloy-tabstop="true" tabindex="-1"
                                                    class="tox-toolbar__group"><button aria-label="Source code"
                                                        title="Source code" type="button" tabindex="-1"
                                                        class="tox-tbtn" aria-disabled="false"><span
                                                            class="tox-icon tox-tbtn__icon-wrap"><svg width="24" height="24"
                                                                focusable="false">
                                                                <g fill-rule="nonzero">
                                                                    <path
                                                                        d="M9.8 15.7c.3.3.3.8 0 1-.3.4-.9.4-1.2 0l-4.4-4.1a.8.8 0 010-1.2l4.4-4.2c.3-.3.9-.3 1.2 0 .3.3.3.8 0 1.1L6 12l3.8 3.7zM14.2 15.7c-.3.3-.3.8 0 1 .4.4.9.4 1.2 0l4.4-4.1c.3-.3.3-.9 0-1.2l-4.4-4.2a.8.8 0 00-1.2 0c-.3.3-.3.8 0 1.1L18 12l-3.8 3.7z">
                                                                    </path>
                                                                </g>
                                                            </svg></span></button></div>
                                            </div>
                                        </div>
                                        <div class="tox-anchorbar"></div>
                                    </div>
                                    <div class="tox-sidebar-wrap">
                                        <div class="tox-edit-area"><iframe id="richtextbody_ifr" frameborder="0"
                                                allowtransparency="true" title="Rich Text Area"
                                                class="tox-edit-area__iframe"></iframe></div>
                                        <div role="complementary" class="tox-sidebar">
                                            <div data-alloy-tabstop="true" tabindex="-1"
                                                class="tox-sidebar__slider tox-sidebar--sliding-closed" style="width: 0px;">
                                                <div class="tox-sidebar__pane-container"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tox-statusbar">
                                    <div class="tox-statusbar__text-container">
                                        <div role="navigation" data-alloy-tabstop="true" class="tox-statusbar__path"
                                            aria-disabled="false">
                                            <div role="button" data-index="0" tab-index="-1" aria-level="1" tabindex="-1"
                                                class="tox-statusbar__path-item" aria-disabled="false">p</div>
                                        </div><span class="tox-statusbar__branding"><a
                                                href="https://www.tiny.cloud/?utm_campaign=editor_referral&amp;utm_medium=poweredby&amp;utm_source=tinymce&amp;utm_content=v5"
                                                rel="noopener" target="_blank" tabindex="-1"
                                                aria-label="Powered by Tiny">Powered by Tiny</a></span>
                                    </div>
                                    <div title="Resize" data-alloy-tabstop="true" tabindex="-1"
                                        class="tox-statusbar__resize-handle"><svg width="10" height="10" focusable="false">
                                            <g fill-rule="nonzero">
                                                <path
                                                    d="M8.1 1.1A.5.5 0 119 2l-7 7A.5.5 0 111 8l7-7zM8.1 5.1A.5.5 0 119 6l-3 3A.5.5 0 115 8l3-3z">
                                                </path>
                                            </g>
                                        </svg></div>
                                </div>
                                <div aria-hidden="true" class="tox-throbber" style="display: none;"></div>
                            </div>


                        </div>
                    </div><!-- .panel -->

                    <!-- ### EXCERPT ### -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Excerpt <small>Small description of this post</small></h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                    aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <textarea class="form-control" name="excerpt">This is the excerpt for the Lorem Ipsum Post</textarea>
                        </div>
                    </div>

                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Additional Fields</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                    aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <!-- ### DETAILS ### -->
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-clipboard"></i> Post Details</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                    aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="slug">URL slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="slug"
                                    data-slug-origin="title" data-slug-forceupdate="true" value="lorem-ipsum-post">
                            </div>
                            <div class="form-group">
                                <label for="status">Post Status</label>
                                <select class="form-control" name="status">
                                    <option value="PUBLISHED" selected="selected">published</option>
                                    <option value="DRAFT">draft</option>
                                    <option value="PENDING">pending</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category_id">Post Category</label>
                                <select class="form-control" name="category_id">
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">demo22</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="featured">Featured</label>
                                <input type="checkbox" name="featured">
                            </div>
                        </div>
                    </div>

                    <!-- ### IMAGE ### -->
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                    aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <img src="http://localhost:8000/storage/posts/post1.jpg" style="width:100%">
                            <input type="file" name="image">
                        </div>
                    </div>

                    <!-- ### SEO CONTENT ### -->
                    <div class="panel panel-bordered panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                    aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea class="form-control" name="meta_description">This is the meta description</textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <textarea class="form-control" name="meta_keywords">keyword1, keyword2, keyword3</textarea>
                            </div>
                            <div class="form-group">
                                <label for="seo_title">SEO Title</label>
                                <input type="text" class="form-control" name="seo_title" placeholder="SEO Title"
                                    value="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right">
                Update Post </button>
        </form>

        <div style="display:none">
            <input type="hidden" id="upload_url" value="http://localhost:8000/admin/upload">
            <input type="hidden" id="upload_type_slug" value="posts">
        </div>
    </div>
@stop


<div x-data="{textEditor:@entangle($attributes->wire('model')).defer}"
     x-init="()=>{var element = document.querySelector('trix-editor');
                element.editor.insertHTML(textEditor);}"
     wire:ignore>

<input x-ref="editor"
       id="editor-x"
       type="hidden"
       name="content">

<trix-editor  input="editor-x"
             x-on:trix-change="textEditor=$refs.editor.value;"
></trix-editor>
</div>


@push('styles')
<link  rel="stylesheet" href="{{asset('trix/trix.css')}}"/>
@endpush

@push('scripts')
<script type="text/javascript" src="{{asset('trix/trix.js')}}"></script>
@endpush

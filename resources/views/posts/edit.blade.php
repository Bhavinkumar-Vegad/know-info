<x-app-layout>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>

    @if(Session::has('message'))
                    <div class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800 ">
                        <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

    <div class="container mx-auto sm:px-4 mx-auto sm:px-4 pt-10 mx-auto sm:px-4">
        <div class="flex flex-wrap  justify-center">
            <div class="md:w-full pr-4 pl-4">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">Post - edit</div>

                    <div class="flex-auto p-6">
                        {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'put', 'enctype' => 'multipart/form-data']) !!}
{{--                        <div class="mb-4 @if($errors->has('thumbnail')) has-error @endif">--}}
{{--                        {!!Form::file('post_image')!!}--}}
{{--                            @if ($errors->has('post_image'))--}}
{{--                                <span class="help-block">{!! $errors->first('post_image') !!}</span>@endif--}}
{{--                        </div>--}}

                        <div class="mb-4 @if($errors->has('title')) has-error @endif">
                            {!! Form::label('Slug') !!}
                            {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Slug']) !!}
                            @if ($errors->has('title'))
                                <span class="help-block">{!! $errors->first('title') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('firstname_lastname')) has-error @endif">
                            {!! Form::label('Firstname Lastname') !!} <br>
                            {!! Form::text('firstname_lastname', $post->firstname_lastname, ['class' => 'form-control', 'placeholder' => 'Firstname Lastname']) !!}
                            @if ($errors->has('firstname_lastname'))
                                <span class="help-block">{!! $errors->first('firstname_lastname') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('short_description')) has-error @endif">
                            {!! Form::label('Short Description') !!} <br>
                            {!! Form::textarea('short_description', $post->short_description, ['class' => 'form-control', 'placeholder' => 'Short Description']) !!}
                            @if ($errors->has('short_description'))
                                <span class="help-block">{!! $errors->first('short_description') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('dob')) has-error @endif">
                            {!! Form::label('DOB') !!} <br>
                            {!! Form::date('dob', $post->dob, ['class' => 'form-control', 'placeholder' => 'DOB']) !!}
                            @if ($errors->has('dob'))
                                <span class="help-block">{!! $errors->first('dob') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('address')) has-error @endif">
                            {!! Form::label('Address') !!} <br>
                            {!! Form::textarea('address', $post->address, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                            @if ($errors->has('address'))
                                <span class="help-block">{!! $errors->first('address') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('email')) has-error @endif">
                            {!! Form::label('email') !!} <br>
                            {!! Form::email('email', $post->email, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">{!! $errors->first('email') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('phone')) has-error @endif">
                            {!! Form::label('phone') !!} <br>
                            {!! Form::number('phone', $post->phone, ['class' => 'form-control', 'placeholder' => 'phone']) !!}
                            @if ($errors->has('phone'))
                                <span class="help-block">{!! $errors->first('phone') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('work_details ')) has-error @endif">
                            {!! Form::label('work_details ') !!} <br>
                            {!! Form::textarea('work_details ', $post->work_details, ['class' => 'form-control', 'placeholder' => 'work_details ']) !!}
                            @if ($errors->has('work_details '))
                                <span class="help-block">{!! $errors->first('work_details ') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('education_details')) has-error @endif">
                            {!! Form::label('education_details') !!} <br>
                            {!! Form::textarea('education_details', $post->education_details, ['class' => 'form-control', 'placeholder' => 'education_details']) !!}
                            @if ($errors->has('education_details'))
                                <span class="help-block">{!! $errors->first('education_details') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('extra_skills')) has-error @endif">
                            {!! Form::label('extra_skills') !!} <br>
                            {!! Form::textarea('extra_skills', $post->extra_skills, ['class' => 'form-control', 'placeholder' => 'extra_skills']) !!}
                            @if ($errors->has('extra_skills'))
                                <span class="help-block">{!! $errors->first('extra_skills') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('resume_url')) has-error @endif">
                            {!! Form::label('resume_url') !!} <br>
                            {!! Form::text('resume_url', $post->resume_url, ['class' => 'form-control', 'placeholder' => 'resume_url']) !!}
                            @if ($errors->has('resume_url'))
                                <span class="help-block">{!! $errors->first('resume_url') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('logo_url')) has-error @endif">
                            {!! Form::label('logo_url') !!} <br>
                            {!! Form::text('logo_url', $post->logo_url, ['class' => 'form-control', 'placeholder' => 'logo_url']) !!}
                            @if ($errors->has('logo_url'))
                                <span class="help-block">{!! $errors->first('logo_url') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('tag_line')) has-error @endif">
                            {!! Form::label('tag_line') !!} <br>
                            {!! Form::textarea('tag_line', $post->tag_line, ['class' => 'form-control', 'placeholder' => 'tag_line']) !!}
                            @if ($errors->has('tag_line'))
                                <span class="help-block">{!! $errors->first('tag_line') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('details')) has-error @endif">
                            {!! Form::label('Details') !!}
                            {!! Form::textarea('details', $post->details, ['class' => 'form-control', 'placeholder' => 'Details']) !!}
                            @if ($errors->has('details'))
                                <span class="help-block">{!! $errors->first('details') !!}</span>@endif
                        </div>

                        <div class="mb-4 @if($errors->has('websitelink')) has-error @endif">
                            {!! Form::label('websitelink') !!}
                            {!! Form::text('websitelink', $post->websitelink, ['class' => 'form-control', 'placeholder' => 'websitelink']) !!}
                            @if ($errors->has('websitelink'))
                                <span class="help-block">{!! $errors->first('websitelink') !!}</span>@endif
                        </div>
                        <div class="mb-4">
                            {!! Form::label('Publish') !!}
                            {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                        </div>

                        {!! Form::submit('Update',['class' => 'bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-2 px-4 rounded']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');
        });
    </script>

</x-app-layout>

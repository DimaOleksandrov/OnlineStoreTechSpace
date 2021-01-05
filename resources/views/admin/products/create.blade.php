@extends('admin.layouts.main')
@section('content')
<div  class="uk-card uk-card-default uk-width-expand uk-overflow-hidden">
<form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
<div class="uk-card uk-card-default ">
        <div class="uk-card-header">
            Створення товару  
    </div>
<div class="uk-card-body">
<table class="uk-padding-medium-left uk-table uk-table-divider">
                                
                                            <tbody>
                                                <tr>
                                                    <td class="uk-width-1-5@m uk-width-1-5 uk-text-center">Бренд</td>
                                                    <td  class="uk-width-1-4@m uk-width-1-3 uk-text-center"> <select class="uk-select uk-width-1-5@s" name="brand_id">
                                                        @foreach($brandsForMenu as $brand)
                                                            <option value="{{$brand->id}}">
                                                            {{$brand->name}}
                                                            </option>
                                                        @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  class="uk-text-center">Назва</td>
                                                    <td  class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="title" value=""></td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Цiна</td>
                                                    <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="price" value=""></td>
                                                </tr>
                                                <tr>
                                                    <td  class="uk-text-center">Категория</td>
                                                    <td  class="uk-text-center"> <select class="uk-select uk-width-1-5@s" name="category_id">
                                                        @foreach($categoriesForMenu as $category)<option value="{{$category->id}}">
                                                            {{$category->name}}
                                                            </option>
                                                        @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Процессор</td>
                                                    <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="cpu" value=""></td>
                                                </tr>
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Дiагональ</td>
                                                    <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="display_diagonal" value=""></td>
                                                    
                                                </tr>
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Тип матрицi</td>
                                                    <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="display_type" value=""></td>
                                                   
                                                </tr>
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Пам'ять</td>
                                                    <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="memory" value=""></td>
                                                   
                                                </tr>
                                                <tr>
                                                   
                                                   <td class="uk-text-center">OS</td>
                                                   <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="os" value=""></td>
                                                
                                               </tr>
                                               <tr>
                                                   
                                                   <td class="uk-text-center">OЗУ</td>
                                                   <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="ram" value=""></td>
                                                
                                               </tr>
                                               <tr>
                                                   
                                                   <td class="uk-text-center">Вiдеокарта</td>
                                                   <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="gpu" value=""></td>
                                                
                                               </tr>
                                               <tr>
                                                   
                                                   <td class="uk-text-center">Тип ОЗУ</td>
                                                   <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="type_ram" value=""></td>
                                                
                                               </tr>
                                               <tr>
                                                   
                                                   <td class="uk-text-center">Кiлькiсить sim-карт</td>
                                                   <td class="uk-text-center"><input class="uk-input uk-form-blank uk-width-1-3@s" type="text" name="sim" value=""></td>
                                                  
                                               </tr>
                                            </tbody>
                                        </table>
                                        <div class="uk-width-expand uk-grid" uk-grid>
                                        <div class="uk-width-1-4 uk-height-1-5 uk-flex uk-flex-column uk-inline-clip uk-transition-toggle">
                                            <p class="uk-text-center">Фото-обложка</p>
                                                    <div class="uk-position-center">
                                                        <div class="uk-transition-slide-bottom-small">
                                                        <div class="js-upload" uk-form-custom>
                                                            <input type="file" name="firstImage">
                                                            <button class="uk-button uk-button-secondary" type="button">Завантажити</button>
                                                        </div>
                                                        </div>
                                                    </div>
</div>
                                            <div class="uk-margin-large-top uk-margin-large-bottom" uk-margin="">
                                            <div uk-form-custom="" class="uk-form-custom">
                                                <input type="file" name="newImages[]" multiple>
                                                <button class="uk-button uk-button-secondary" type="button" tabindex="-1">Завантажити нове фото</button>
                                            </div>
                                        </div>
</div>
                                        <div class=" uk-margin-medium-left uk-margin-medium-top  uk-margin-medium-bottom uk-width-1-6@s uk-button-group">
                                        @csrf
                                            <button type="submit"class="uk-button uk-button-secondary uk-button-large">Зберегти
                                           </button>
                                        </div>
                                        </form>
</div>
                                        @endsection
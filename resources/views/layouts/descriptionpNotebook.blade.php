<table class=" uk-table uk-table-divider" id="characteristics">
                                            <thead>
                                                <tr>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if($product->cpu)
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Процессор</td>
                                                    <td class="uk-text-center">{{$product->cpu}}</td>
                                                </tr>
                                                @endif
                                                @if($product->display_diagonal)
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Дiагональ</td>
                                                    <td class="uk-text-center">{{$product->display_diagonal}}</td>
                                                </tr>
                                                @endif
                                                @if($product->display_type)
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Тип матрицi</td>
                                                    <td class="uk-text-center">{{$product->display_type}}</td>
                                                </tr>
                                                @endif
                                                @if($product->memory)
                                                <tr>
                                                   
                                                    <td class="uk-text-center">Пам'ять</td>
                                                    <td class="uk-text-center">{{$product->memory}}</td>
                                                </tr>
                                                @endif
                                                @if($product->os)
                                                <tr>
                                                   
                                                   <td class="uk-text-center">OS</td>
                                                   <td class="uk-text-center">{{$product->os}}</td>
                                               </tr>
                                               @endif
                                               @if($product->ram)
                                               <tr>
                                                   
                                                   <td class="uk-text-center">ОЗУ</td>
                                                   <td class="uk-text-center">{{$product->ram}}</td>
                                               </tr>
                                               @endif
                                               @if($product->type_ram)
                                               <tr>
                                                   
                                                   <td class="uk-text-center">Тип ОЗУ</td>
                                                   <td class="uk-text-center">{{$product->type_ram}}</td>
                                               </tr>
                                               @endif
                                               @if($product->gpu)
                                               <tr>
                                                   
                                                   <td class="uk-text-center">Вiдеокарта</td>
                                                   <td class="uk-text-center">{{$product->gpu}}</td>
                                               </tr>
                                               @endif
                                            </tbody>
                                        </table>
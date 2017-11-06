 <div id="infor">
                                            <div class="accordion" id="accordion2">
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                                            Agregar
                                                        </a>
                                                    </div>
                                                    <div id="collapseOne" class="accordion-body collapse in">
                                                        <div class="accordion-inner">
                                                            <form id="formulario">
                                                                <table>
                                                                    <tr>
                                                                        <td>Título</td>
                                                                        <td><input type="text" class="form-control"  name="titulo" autocomplete="off"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Coordenada X</td>
                                                                        <td><input type="text" class="form-control" readonly  name="cx" autocomplete="off"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Coordenada Y</td>
                                                                        <td><input type="text" class="form-control"  readonly name="cy" autocomplete="off"/></td>
                                                                    </tr>
                                                                    <!-- Aqui estar� se colocaran los mensajes para el usuario -->
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><span id="loader_grabar" class=""></span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><button type="button" id="btn_grabar" class="btn btn-success btn-sm">Grabar</button></td>
                                                                        <td><button type="button" class="btn btn-danger btn-sm">Cancelar</button></td>
                                                                    </tr>
                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                                            Eliminar
                                                        </a>
                                                    </div>
                                                    <div id="collapseTwo" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <form id="formulario_eliminar">
                                                                <input type="hidden" class="form-control"  name="id"/>
                                                                <table>
                                                                    <tr>
                                                                        <td>Título</td>
                                                                        <td><input type="text" class="form-control"  name="titulo" autocomplete="off"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Coordenada X</td>
                                                                        <td><input type="text" class="form-control" readonly  name="cx" autocomplete="off"/></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Coordenada Y</td>
                                                                        <td><input type="text" class="form-control"  readonly name="cy" autocomplete="off"/></td>
                                                                    </tr>
                                                                    <!-- Aqui estar� se colocaran los mensajes para el usuario -->
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><span id="loader_grabar" class=""></span></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><button type="button" id="btn_actualizar" class="btn btn-success btn-sm">Actualizar</button></td>
                                                                        <td><button type="button" id="btn_borrar" class="btn btn-danger btn-sm">Borrar</button></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td><label>
                                                                                <input id="opc_edicion" type="checkbox"> Habilitar Edición
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                                            Buscar
                                                        </a>
                                                    </div>
                                                    <div id="collapseThree" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <form id="formulario_buscar">
                                                                <table>
                                                                    <TR>
                                                                        <td>
                                                                            <input type="text" id="palabra_buscar"  class="form-control" autocomplete="off" />
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" id="btn_buscar"  class="btn btn-success btn-sm" >Buscar</button>
                                                                        </td>
                                                                    </TR>

                                                                    <TR>
                                                                        <td>
                                                                            <select id="select_resultados">
                                                                                <option value="uno">uno</option>
                                                                            </select>
                                                                        </td>
                                                                        <td></td>
                                                                    </TR>

                                                                </table>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


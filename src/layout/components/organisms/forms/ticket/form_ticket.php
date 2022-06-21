<form method="post" class="needs-validation" id="frm" novalidate>
    <div class="row">
        <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
            <div class="form-group">
                <label for="ticket_name">Nombre del ticket</label>
                <input type="hidden" name="idp" id="idp" value="">
                <input type="text" inputmode="text" placeholder="Nombre del problema" id="ticket_name"
                    name="ticket_name" class="form-control" required>
                <p>Este campo NO acepta carácteres especiales</p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
            <div class="form-group">
                <label for="sections">¿Que secciòn falla?</label>
                <input type="text" inputmode="text" placeholder="¿Que secciòn falla?" id="sections" name="sections"
                    class="form-control" required>
                <p>Este campo NO acepta carácteres especiales</p>
                <!--<select class="form-select" name="sections" id="sections" required>
                                        <option selected>Seleccione una opción</option>
                                        <option value="registrar_usuarios" name="registrar_usuarios"
                                            id="registrar_usuarios">Registrar usuarios</option>
                                        <option value="registrar_aplicantes" name="registrar_aplicantes"
                                            id="registrar_aplicantes">Registrar aplicantes</option>
                                        <option value="registrar_empleos" id="registrar_empleos"
                                            name="registrar_empleos">Registrar empleos</option>
                                        <option value="lista_trabajos" id="lista_trabajos" name="lista_trabajos">Lista
                                            de trabajos</option>
                                        <option value="lista_trabajos_aliados" id="lista_trabajos_aliados"
                                            name="lista_trabajos_aliados">Lista de trabajos aliados</option>
                                        <option value="preguntas_frecuentes" id="preguntas_frecuentes"
                                            name="preguntas_frecuentes">Preguntas frecuentes</option>
                                        <option value="blog" id="blog" name="blog">Blog</option>
                                        <option value="manejador_blog" id="manejador_blog" name="manejador_blog">
                                            Manejador de contenido del blog</option>
                                        <option value="manejador_chatbot" id="manejador_chatbot"
                                            name="manejador_chatbot">Manejador de chatbot</option>
                                        <option value="creador_cv" id="creador_cv" name="creador_cv">Creador de C.V.
                                        </option>
                                        <option value="chat_ayuda" id="chat_ayuda" name="chat_ayuda">Chat de ayuda
                                        </option>
                                    </select>-->
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
            <div class="form-group">
                <label for="ticket_comment">Descripción del problema</label>
                <textarea name="ticket_comment" id="ticket_comment" class="form-control" cols="30" rows="10"
                    placeholder="Descripción del problema" required></textarea>
                <p>Este campo NO acepta carácteres especiales</p>
                <div class="invalid-feedback">
                    ¡Campo vacio!. Favor de verificarlo
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-xl-12 mt-4">
            <button type="submit" value="Registrar" id="registrar" class="btn btn-success btn-lg">
                Registrar ticket
            </button>
        </div>
    </div>
</form>
<script type="text/javascript" src="vendedor.js"></script>
<article id="<?php echo $preguntas['id']; ?>" class="question question--question media-object question--opened"><!-- questions.question.hbs -->
    <div data-js="questions-old"></div>
    <div data-href="#/preguntas/vendedor/3515814539" class="question__link">
        <div class="question__row">
            <div class="media-object-img question-media-col">
                <i class="question__icon ch-icon-comment"></i>
            </div>
            <div class="media-object-content">
                <p class="question__text">
                    <input type="text" value="<?php echo $preguntas['pregunta']; ?>"/>
                </p>
                <p class="question__date">
                    Hace 19 minutos.
                </p>
            </div>
        </div>
    </div>
    <div data-js="questions-answer-desktop" style="display: block;">
        <div class="question__info clearfix">
            <a href="http://www.mercadolibre.com.uy/jm/profile?id=96791676&amp;oper=S" class="question__user-link no-state" target="_blank">
                <?php echo $preguntas['usuario']; ?>
            </a>
        </div>
        <div class="question__info">
            Si esta pregunta incluye alguna de las preguntas ya respondidas podes responder automaticamente:<br>
            
            <div id="questionList">
            - Vienen en varios colores? <a href="" class="deleteQuestion" id="">(x)</a>
            </div><br>
            <select id="questionSelector">
                <option value="">Elija una...</option>
                <option value="volvo">Que talle es?</option>
                <option value="saab">Haces envios?</option>
                <option value="mercedes">Vendes uno solo?</option>
            </select>
        </div>
        <div data-js="answer-form">
            <div class="question__info">
                O de lo contrario responder:
            </div>
            <form class="question-replay">
                <textarea class="question-replay__textarea" name="Answer" rows="8" cols="40" placeholder="Escribe tu respuesta..."></textarea>
                <!-- mensaje de error de validación -->
                <div class="ch-box-icon ch-box-error empty-field">
                    <i class="ch-icon-remove-sign"></i>
                    Ups, olvidaste escribir tu respuesta.

                </div>

                <div class="ch-box-icon ch-box-warn">
                    <i class="ch-icon-warning-sign"></i>No ingreses datos de contacto
                </div>
                <div class="ch-box-icon ch-box-warn special-chars">
                    <i class="ch-icon-warning-sign"></i>No uses caracteres especiales
                </div>
                <div class="question-replay__actions clearfix">
                    <button type="submit" class="question-replay__btn-submit ch-btn">Responder</button>
                    <a href="#/preguntas/vendedor" class="question-replay__btn-cancel mobile-hidden no-state">Cancelar</a>
                    <a href="#/preguntas/vendedor/3515814539/eliminar" class="question-replay__btn-delete no-state" data-js="delete-modal-trigger"><span class="ch-icon-trash"></span>Eliminar pregunta</a>
                </div>
            </form>
        </div>
    </div>
</article>
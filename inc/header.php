<body>
    <header id="inicioPg">
        <section class="row">
            <h1>Desenvolvedor Web Junior</h1>
            <a class="icones"><i class="fas fa-laptop-code"></i></a>
        </section>
        <section>
            <p>Rodrigo Morais Machado | <a href="https://github.com/Rmachado219" target="_blank" rel="noopener" title="Acesse meu perfil no github" class="github"><i class="fab fa-github"></i></a> | <a href="https://www.linkedin.com/in/rodrigo-machado-735b92186/" target="_blank" rel="noopener" title="Acesse meu perfil no Linkedin" class="linkedin"><i class="fab fa-linkedin"></i></a></p>
            <p><a href="mailto:rodrigmachado11@gmail.com?subject=Possivel%20vaga" title="Entre e contato comigo por email" class="gmail"><i class="far fa-envelope"></i></a> <a>rodrigmachado11@gmail.com</a> | <a href="tel:+5511985787708" title="Entre em contato comigo pelo celular ou whatsApp" class="whatsApp"><i class="fab fa-whatsapp"></i></a> <a>(11) 98578-7708</a> | São Caetano do Sul-SP</p>
        </section>
    </header>
    <main>
        <section class="row">
            <h2>Hard Skills</h2>
            <a class="icones"><i class="fas fa-dumbbell"></i></a>
            <div class="row col-12 ml-auto mb-2 mt-3 font-weight-bold">
                <?php
                    $skill=["HTML5, ", "CSS3, ", "PHP, ", "BOOTSTRAP, ", "MYSQL, ", "LARAVEL, ", "JAVASCRIPT, ", "GITHUB, ", "VISUAL STUDIO CODE, ", "EXCEL, ", "WORD, ", "POWER POINT, ", "OUTLOOK"];
                    for ($i=0; $i < count($skill); $i++) { 
                        echo $skill[$i] . " ";
                    }
                    ?>
            </div>
        </section>
        <section class="row">
            <h2>Portfólio</h2>
            <a class="icones"><i class="fas fa-upload"></i></a>
        </section>
        <section class="row">
            <img src="./assets/img/e-commerce.jpg" alt="Imagem Portfólio" height="200" width="300">
        </section>
            <a href="#" title="Projeto feito em grupo na Digital House" id="eCommerce">Projeto DH</a>
        <section class="row">
            <h2>Soft Skills</h2>
            <a class="icones"><i class="fas fa-dna"></i></a>
        </section>
                <ul>
                    <li class="ml-auto text-left ">
                        <?php
                            $skill2=["Comprometimento", "Comunicação", "Determinação", "Foco", "Liderança", "Resiliência", "Trabalho em equipe"];
                            for ($i=0; $i < count($skill2); $i++) { 
                                echo $skill2[$i] . "<br>";
                            }
                        ?>
                    </li>
                </ul>
        <section class="row">
            <h2>Certificações</h2>
            <a class="icones"><i class="fas fa-trophy"></i></a>
        </section>
                <ul>
                    <li>2019 – Scrum Fundamentals Certified |SCRUMStudy | <b>Credencial: 681056</b></li>
                    <li>2019 – Six Sigma Yellow Belt Professional | SCRUMStudy | <b>Credencial: 673860</b></li>
                    <li>2019 – Lean Six Sigma White Belt |EDTI | <b>Credencial: 014523</b></li>
                </ul>
        <div class="row">
            <h2>Idiomas</h2>
            <a class="icones"><i class="fas fa-language"></i></a>
            <table class="table table-striped text center mt-3">
                <thead class="thead-dark">
                    <tr>
                        <th>Idioma</th>
                        <th scope="col">Leitura</th>
                        <th scope="col">Escrita</th>
                        <th scope="col">Conversação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Português</th>
                        <td scope="row">Nativo</td>
                        <td scope="row">Nativo</td>
                        <td scope="row">Nativo</td>
                    </tr>
                    <tr>
                        <th>Inglês</th>
                        <td scope="row">Intermediário</td>
                        <td scope="row">Intermediário</td>
                        <td scope="row">Intermediário</td>
                    </tr>
                </table>
        </div>
    </main>
    <aside>
        <section class="row">
            <h3>Cursos</h3>
            <a class="icones"><i class="fas fa-chess-rook"></i></a>
        </section>
                <ul>
                    <li>2020 – Desenvolvedor Web Full Stack | Digital House</li>
                    <li>2020 – Competência Transversal - Lógica de Programação |SENAI</li>
                    <li>2020 – Criando repositório para projetos inovadores | Digital Innovation One - Carrefour</li>
                    <li>2020 – Introdução ao Git e controle de versões | Digital Innovation One - Carrefour</li>
                    <li>2020 – Introdução GitHub | Digital Innovation One - Carrefour</li>
                    <li>2020 – Lógica de Programação essencial | Digital Innovation One – Carrefour</li>
                    <li>2020 – Marketing Digital | Faculdade Anhanguera</li>
                    <li>2020 – PMBOK 6 Gerenciamento de Projetos | Green Tecnologia</li>
                    <li>2019 – COBIT 5 Fundamentos |Green Tecnologia</li>
                    <li>2019 – ITIL 4 Fundamentos | Green Tecnologia</li>
                    <li>2019 – Técnicas de Comunicação e Oratória para Profissionais| Green Tecnologia</li>
                    <li>2018 – Excel Intermediário | SENAI</li>
                    <li>2017 – Excelência no atendimento ao cliente | AES Eletropaulo</li>
                </ul>
        <section class="row">
            <h3>Formação</h3>
            <a class="icones"><i class="fas fa-book-open"></i></a>
        </section>
            <p>2016 – 2021 Engenharia Elétrica | <b>Cursando</b> 9º Semestre</p>
        <section class="row">
            <h3>Experiencia</h3>
            <a class="icones"><i class="fas fa-flask"></i></a>
        </section>
            <article>2012 – Atual Eletricista de Rede | Líder de equipe | Enel Distribuição São Paulo</article>
                <p>
                    Atuando na área de recuperação de perdas com o objetivo de evitar a perda de energia elétrica e recuperar energia elétrica, desta forma atuo na abertura e fechamento de bases fusíveis, atendimento em baixa tensão, inspeção em baixa tensão, substituição de medidores de energia, reparo em cabos de energia, troca de ramal. Preenchimento de toda documentação exigida pela companhia tais como: Termo de Ocorrência de Inspeções (TOI) e Análise Preliminar de Riscos (APR). Atendimento de ordem de serviços tais como: suspensão de energia, religação, restauração de energia, instalações de medidores, instalação de ramal e resgate em altura. Realizando todo trabalho em campo obedecendo às normas: de seguranças, utilizando os Equipamentos de proteção individual (EPI) necessário para a realização de serviços, trabalhando sempre com ética e transparência, para entregar o serviço com qualidade.
                </p>
        </section>
    </aside>
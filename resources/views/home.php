<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>React e Ratchet, async e websockets com PHP</title>

		<meta name="description" content="A framework for easily creating beautiful presentations using HTML">
		<meta name="author" content="Hakim El Hattab">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/league.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body data-websockets-address="<?php echo $websocketsAddress; ?>" data-mode="<?php echo $mode; ?>">

		<div class="reveal">
            <div class="users-counter"></div>

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

                <section>
                    <h2>http://<?php echo $host; ?></h2>
                    <h1>Palestra interativa!</h1>
                    <h3>Smartphone / Tablet / Notebook</h3>
                    <p><img src="images/navegadores.png" /></p>
                    <h4>Instruções para Palestrantes!</h4>
                </section>

				<section class="sound-comecar">
					<h1>Bem vindo ao guia de Palestrantes para o Seminário Locaweb PHPSP</h1>
				</section>

				<section>
					<h2>Instruções Iniciais!</h2>
                    <p>Estamos usando Reveal.js para criar os slides, você pode acessar a documentação oficial do projeto <a href="https://github.com/hakimel/reveal.js">aqui</a></p>
                    <p>Mas é muito simples criar seus slides, basta usar marcação HTML simples. Nos deixamos algumas coisas prontas para você também.</p>
                    <p>O arquivo de slides está armazenadoe em "resources/views/home.php" dentro desse projeto, é nesse arquivo que você deve incluir os seus slides</p>
				</section>

				<section>
					<h2>Código</h2>
                    <p>para inserir trechos de código no slide basta seguir a seguinte formação:</p>
					<pre>
                        <code class="HTML" data-trim>
&lt;pre&gt;
    &lt;code class="php" data-trim&gt;
    &lt;/code&gt;
&lt;/pre&gt;
                        </code>
                    </pre>
				</section>

				<section class="poll" data-number="1">
                    <p>Enquetes</p>
                    <p>Adicione na tag section um atributo data-number com um valor único para criar enquetes</p>
                    <p>Tambem adicione a classe pool na section</p>
                    <p>Use esse slide como exemplo</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section class="sound-suspense02" data-number="1">
                    <p>Som</p>
                    <p>Para adcionar sons, você deve alterar o arquivo "public/js/modules/sound.js" e incluir uma classe sound-* na section</p>
                    <p>Use esse slide como exemplo</p>
                </section>

                <section class="sound-suspense02" data-number="1">
                    <p>Mantenha Esses Slides</p>
                    <p>Insira seus slides após esse slide e mantenha os slides de exemplo para que outros palestrantes possam ver também</p>
                    <p>Envie-nos um Pull Request até 10/01/2016</p>
                </section>

                <!-- react além dos websockets -->
                <section>
                  <section>
                    <h2>
                      React além dos WebSockets
                    </h2>
                    <pre><code class="php">
      $seminarioLocaweb = new BigMuthaFuckinEvent(new \DateTime());

      $seminarioLocaweb->setMadnessMode(true);
                      </code></pre>
                    
                  </section>

                  <section>
                    <h2>
                      Níckolas Daniel da Silva
                    </h2>
                    <div>
                      <div style="float: left">
                        <img data-src="http://eventos.locaweb.com.br/files/2015/12/N%C3%ADckolas-Daniel-da-Silva.jpg">
                      </div>
                      <div style="float: right; width: 18em;">
                        <ul>
                          <li>
                            Bombeiro de Software há 4 anos
                          </li>
                          <li>  
                            Análise e Desenvolvimento de Sistemas [UNIFIEO]
                          </li>
                          <li>
                            Engenharia de Software Orientada para Serviços [IBTA]
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <small style="margin-top: 2em;">
                      <a href="http://nawarian.xyz" target="_new">
                        http://nawarian.xyz
                      </a>
                      |
                      <a href="http://git.io/vEe0o" target="_new">
                        http://git.io/vEe0o
                      </a>
                      |
                      <a href="http://phpsp.org.br" target="_new">
                        http://phpsp.org.br
                      </a>
                    </small>
                    <br>
                    <img data-src="images/skype-hug.gif" style="border: 1px solid #000">
                  </section>
                </section>

                <section id="introducao">
                  <section>
                    <h2>
                      Como costumamos programar
                    </h2>
                    <p>
                      Vamos registrar um novo jogador!
                    </p>
                    <pre><code class="php">      try {
        $mapper = $this->getMapper();

        $player = new Model\Player();
        $player->decorate($data); // dados do jogador

        $mapper->player->persist($player); // Player + atributos
        $this->createInventory($player); // Inventário 30x30 [slots]
        $this->createSkillset($player); // Skills + Níveis

        $mapper->flush();
        return (new JsonResponse($player));
      } catch (\Exception $e) {
        return (new JsonResponse(new Error($e)));
      }
                      </code></pre>
                  </section>
                  <section data-background-size="290px" data-background="images/creating-player/sincrono/01.png"></section>
                  <section data-background-size="290px" data-background="images/creating-player/sincrono/02.png"></section>
                  <section data-background-size="290px" data-background="images/creating-player/sincrono/03.png"></section>
                  <section data-background-size="290px" data-background="images/creating-player/sincrono/04.png"></section>
                  <section>
                    <h2>
                      Este código é...
                    </h2>
                    <aside style="float: left;">
                      <img src="images/reclamando.gif" alt="">
                    </aside>
                    <ul style="float: right; width: 15em;">
                      <li>
                        <strong>Síncrono</strong>: toda operação depende da diretamente anterior,
                        e o resultado final é o único que importa
                      </li>
                      <li>
                        <strong>Acoplado</strong>: toda operação só executa se sua anterior
                        também executar com sucesso
                      </li>
                      <li>
                        <strong>Catastrófico</strong>: uma falha invalida todo o progresso,
                        independentemente de seu nível de gravidade
                      </li>
                      <li>
                        <strong>Pouco responsivo</strong>: não há noção de completitude,
                        sucesso ou falhas
                      </li>
                    </ul>
                  </section>
                  <section data-background="images/processo-batch.gif">
                    
                  </section>
                  <section>
                    <h2>
                      Qual o problema?
                    </h2>
                    <p>
                      A maior fraqueza desse modelo é o custo de programação para
                      fornecer feedback ao usuário de forma decente. <br><br>
                      Além disso, adotar processos com o formato de batch cria
                      sensação de lentidão e impotência no progresso das operações.
                    </p>
                  </section>
                </section>

                <section>
                  <section>
                    <h2>
                      Uma abordagem diferente
                    </h2>
                    <p>
                      Em vez de executar um monte de procedimentos de uma vez,
                      que tal separar um pouco mais as responsabilidades?
                    </p>
                  </section>
                  <section>
                    <h2>
                      Uma cara diferente para fazer o mesmo
                    </h2>
                    <pre><code class="php">
      createPlayerFromRequest(\stdClass $request) { /*...*/ }
      createInventory(Model\Player $player) { /*...*/ }
      createSkillset(Model\Player $player) { /*...*/ }

      try {
          $player = createPlayerFromRequest($data);
          createInventory($player);
          createSkillset($player);

          return (new JsonResponse($player));
      } catch (\Exception $e) {
          return (new JsonResponse(new Error($e)));
      }
                    </code></pre>
                  </section>
                  <section>
                    <p>
                      Mesmo sendo diferente, este código ainda é<br>
                      <strong>catastrófico</strong> e <strong>pouco responsivo</strong>.
                      <br><br>
                      Apesar disto, ficou menos <strong>acoplado</strong>.
                      Mas ainda é <strong>síncrono</strong>...
                    </p>
                  </section>
                  <section>
                    <h2>
                      Catastrófico e Pouco Responsivo...
                    </h2>
                    <pre><code class="php">      try {
          $player = createPlayerFromRequest($data);
          createInventory($player); // 60 ms
          createSkillset($player); // 120 ms

          // Tudo certo *-*
          return (new JsonResponse($player)); // 180 ms
      } catch (InventoryCreationException $e) {
          // Deu erro no inventário
      } catch (SkillsetCreationException $e) {
          // Deu erro na criação das habilidades
      } catch (PlayerCreationException $e) {
          // Deu erro ao criar personagem :O
      } catch (\Exception $e) {
          // Aqui deu ruim mesmo!
      }</code></pre>
                  </section>
                  <section>
                    <p>
                      Eu já posso indicar se o problema foi na
                      criação do jogador, do inventário ou das habilidades.
                    </p>
                    <h3 class="fragment fade-in">
                      Mas por que diabos eu tenho de criar um inventário
                      e SÓ DEPOIS criar as habilidades?
                    </h3>
                  </section>
                  <section>
                    <h2>
                      Imagina só se...
                    </h2>
                    <p>
                      ...essas coisas acontecessem ao <strong>mesmo</strong> tempo
                    </p>
                    <pre><code class="php">
      createPlayerAccount(\stdClass $request) {
          // $player = createPlayerFromRequest($request); (...)
          return all([
            createInventory($player), // 60 ms
            createSkillset($player) // 120 ms
          ]);
      }

      createPlayerAccount($data) // 120 ms
        ->then(function (Model\Player $player) {}) // :D
        ->otherwise(function (InventoryCreationException $e) {}) // :/
        ->otherwise(function (SkillsetCreationException $e) {}) // :(
        ->otherwise(function (\Exception $e) {}); // TToTT
                      
                    </code></pre>

                  </section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/01.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/02.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/03.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/04.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/05.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/06.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/07.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/08.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/09.png"></section>
                  <section data-background-size="570px" data-background="images/creating-player/paralelo/10.png"></section>
                  <section>
                    <p>
                      Trabalhar com processos em <strong>paralelo</strong> cria uma gama
                      de possibilidades! <br>
                      <strong>React PHP</strong> veio para realizar este sonho
                    </p>
                  </section>
                </section>

                <section id="slide-sonho" data-background="images/mind-blow.gif">
                  <h2 style="color: #fff">
                    Quê que dá pra gente fazer com esse "sonho" aí
                  </h2>
                  <canvas id="react-sonho"></canvas>
                </section>

                <section>
                  <section>
                    <h2>
                      Nossos conceitos chave são <strong>assíncrono</strong> e <strong>paralelo</strong>!
                    </h2>
                  </section>
                  <section>
                    <h2>
                      EventLoop - O paralelo
                    </h2>
                    <p>
                      É o grande responsável por controlar os processos
                      paralelos. Possui, atualmente, quatro implementações:
                    </p>
                    <ul>
                      <li>LibEventLoop (<a href="http://php.net/manual/en/book.libevent.php" target="_new">LibEvent</a>)</li>
                      <li>LibEvLoop (<a href="https://github.com/m4rw3r/php-libev" target="_new">Libev</a>)</li>
                      <li>ExtEventLoop (<a href="http://php.net/manual/en/book.event.php" target="_new">Event</a>)</li>
                      <li>StreamSelect (standalone)</li>
                    </ul>
                    <p>
                      A <a href="https://github.com/reactphp/event-loop/blob/master/src/Factory.php" target="_new">EventLoop\Factory</a> utiliza exatamente esta ordem para adivinhar o EventLoop disponível para seu sistema.
                    </p>
                  </section>
                  <section>
                    <h2>
                      EventLoop - Básico
                    </h2>
                    <p>
                      Trata-se de um loop infinito* que, a cada ciclo, executa
                      três grupos de processos quando disponíveis:
                      <ul>
                        <li>Timers (One-off/Periodics)</li>
                        <li>Ticks (Next/Future)</li>
                        <li>Callbacks de Streams</li>
                      </ul>
                    </p>
                  </section>
                  <section data-background="images/event-loop.jpg" data-background-size="1200px" data-background-color="#50534a"></section>
                  
                  <section>
                    <h2>
                      Timers
                      <br>
                      <small>
                        One-off/Periodics
                      </small>
                    </h2>
                    <pre><code class="php">
      $loop = React\EventLoop\Factory::create();
      // Executa {$callback01} infinitamente a cada {$n} segundos
      $eterno = $loop->addPeriodicTimer($n, $callback01);

      // Executa uma única vez, daqui a 5 segundos
      $unico = $loop->addTimer(
        5,
        function () use ($loop, $eterno) {
          if ($loop->isTimerActive($eterno)) {
            // Pára de inserir {$eterno} na fila
            $loop->canceltimer($eterno);
          }
        }
      );
      $loop->run();
                    </code></pre>
                  </section>
                  <section>
                    <h2>
                      Ticks
                      <br>
                      <small>
                        Future/Next
                      </small>
                    </h2>
                    <pre><code class="php">
      $loop = React\EventLoop\Factory::create();

      $nextTickCallback = function () {/*...*/};
      $futureTickCallback = function () {/*...*/};

      // Estes callbacks serão jogados para uma fila de execução
      $loop->nextTick($nextTickCallback);
      $loop->futureTick($futureTickCallback);

      $loop->run();
                    </code></pre>
                  </section>

          <section>
            <h2>
              Callbacks de Streams
            </h2>
            <pre><code class="php">
      $loop = React\EventLoop\Factory::create();

      $streamTal = getStream(); // resource
      stream_set_blocking($streamTal, 0);

      $loop->addReadStream($streamTal, function ($streamTal, $loop) {
          // O que fazer quando $streamTal está pronto para leitura
      });

      $loop->addWriteStream($streamTal, function ($streamTal, $loop) {
          // O que fazer quando $streamTal está pronto para gravação
      });

      $loop->run();
            </code></pre>
          </section>
          <section>
            <p>
              Todos estes adicionam execuções à fila do EventLoop. <br>
              <strong>Este é o coração do React PHP.</strong>
            </p>
          </section>
          <section data-background="images/event-loop.jpg" data-background-size="1200px" data-background-color="#50534a"></section>

        </section>
			</div>

		</div>

		<script src="js/plugins/jquery.min.js"></script>
		<script src="lib/js/head.min.js"></script>
		<script src="js/plugins/reveal.js"></script>
        <script src="js/plugins/soundjs-0.6.0.combined.js"></script>

		<script>
            var mode = $('body').attr('data-mode');
            var websocketsAddress = $('body').attr('data-websockets-address');

            var revealConfig = {
                controls: false,
                progress: true,
                history: false,
                keyboard: false,
                overview: false,
                touch: false,
                center: true,
                autoSlideStoppable: false,
                help: false,

                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // Optional reveal.js plugins
                dependencies: [
                    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: 'plugin/multiplex-ratchet/ratchet.js', async: true },
                    { src: 'js/code.min.js', async: true },
                    //{ src: 'plugin/zoom-js/zoom.js', async: true },
                    //{ src: 'plugin/notes/notes.js', async: true }
                ],

                multiplex: {
                    secret: 'issoehumsegredo',
                    id: 'nossaqueidlegal',
                    url: websocketsAddress
                },
            };

            if (mode == 'presenter') {
                revealConfig.controls = true;
                revealConfig.keyboard = true;
                revealConfig.touch = true;
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/master.js', async: true });
            } else {
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/client.js', async: true });
            }

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize(revealConfig);
		</script>

	</body>
</html>

<?php
/**
 * Template Name: Página Inicial Completa
 * Template Post Type: page
 * 
 * @package Kelen_Silva
 * @since 2.0
 */

get_header(); ?>

<!-- WhatsApp Flutuante -->
<?php
$whatsapp = get_field('whatsapp_number') ?: '5551981502140';
?>
<a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
    </svg>
</a>

<!-- SEÇÃO 1: HERO -->
<section class="hero-section">
    <div class="site-container">
        <?php 
        $hero_logo = get_field('hero_logo');
        if ($hero_logo): 
        ?>
            <img src="<?php echo esc_url($hero_logo); ?>" alt="Logo Kelen Silva" class="hero-logo">
        <?php endif; ?>

        <h1 class="hero-title">
            <?php echo get_field('hero_title') ?: 'Dê um Salto Quântico e Reprograme Sua Consciência'; ?>
        </h1>

        <p class="hero-subtitle">
            <?php echo get_field('hero_subtitle') ?: 'O renascimento não acontece fora. Ele desperta quando você está pronta para sustentar a sua própria energia e manifestar a realidade que deseja.'; ?>
        </p>

        <div class="hero-badge">
            <strong><?php echo get_field('hero_badge') ?: '✨ 8 ENCONTROS 100% ONLINE AO VIVO PELO ZOOM ✨'; ?></strong>
        </div>

        <div class="hero-buttons">
            <a href="<?php echo esc_url(get_field('hero_btn1_link') ?: 'https://pay.hotmart.com/E97944766B?off=6y9966ug'); ?>" 
               class="btn btn-primary">
                <?php echo get_field('hero_btn1_text') ?: 'QUERO REPROGRAMAR MINHA CONSCIÊNCIA'; ?>
            </a>
            <a href="<?php echo esc_url(get_field('hero_btn2_link') ?: 'https://wa.me/5551981502140'); ?>" 
               class="btn btn-secondary">
                <?php echo get_field('hero_btn2_text') ?: 'DÚVIDAS? FALE NO WHATSAPP'; ?>
            </a>
        </div>

        <p style="margin-top: 30px; color: #666;">🔒 Ambiente seguro de pagamento (Hotmart) • Sem sair de casa</p>
    </div>
</section>

<!-- SEÇÃO 2: CHAMADO DA ALMA -->
<section class="chamado-section section">
    <div class="site-container">
        <h2 class="text-center mb-30">
            <?php echo get_field('chamado_title') ?: '🌿 Um Chamado da Alma'; ?>
        </h2>
        
        <div class="chamado-content">
            <p><?php echo get_field('chamado_text1') ?: 'Talvez você já tenha feito terapias, cursos e buscado respostas em diversos lugares.'; ?></p>
            <p><strong style="font-size: 1.5rem;"><?php echo get_field('chamado_text2') ?: 'E ainda assim… sente que existe algo mais profundo pedindo para despertar.'; ?></strong></p>
            <p>A Reprogramação da Consciência surge exatamente nesse ponto:</p>
            <div class="chamado-destaque">
                <?php echo get_field('chamado_destaque') ?: 'Quando a alma está pronta para parar de buscar fora e começar a sustentar a própria energia com consciência.'; ?>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 3: PARA QUEM É -->
<section class="section bg-light">
    <div class="site-container">
        <h2 class="text-center mb-20">🌸 Para Quem É Este Programa?</h2>
        <p class="text-center container-small mb-50" style="font-size: 1.2rem; color: #666;">
            Este programa foi criado para você que sente no coração que chegou a hora de uma transformação verdadeira.
        </p>

        <div class="cards-grid">
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Você sente que repete os mesmos padrões e não consegue sair do lugar?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Vive cansada(o), desmotivada(o) ou sem energia vital?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Tem medo do futuro e se sente perdida(o) sobre qual caminho seguir?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Sente que algo invisível te bloqueia, mas não sabe identificar o que é?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Deseja despertar para uma vida mais alinhada com sua essência e propósito?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Busca elevar sua frequência vibracional e expandir sua consciência?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Quer liberar medos e traumas energéticos do passado?</p>
            </div>
            <div class="card">
                <span class="card-icon">✨</span>
                <p>Sente um chamado espiritual verdadeiro de transformação?</p>
            </div>
        </div>

        <div class="warning-box">
            ⚠️ Este programa não é para curiosos.<br>
            É para quem sente que já não dá mais para adiar o próprio renascimento.
        </div>
    </div>
</section>

<!-- SEÇÃO 4: O QUE É -->
<section class="section bg-white">
    <div class="site-container">
        <h2 class="text-center mb-30">🔮 O Que É o Programa de Reprogramação da Consciência?</h2>
        
        <div class="container-small text-center">
            <p style="font-size: 1.3rem; line-height: 1.9; color: #666; margin-bottom: 30px;">
                A Reprogramação da Consciência é um <strong style="color: var(--brand-purple);">processo profundo de despertar consciente</strong> da energia vital, respeitando o corpo, a psique, o campo emocional e o tempo da alma.
            </p>
            <div style="height: 2px; width: 100px; background: linear-gradient(to right, var(--brand-purple), var(--brand-peach)); margin: 30px auto;"></div>
            <p style="font-size: 1.3rem; font-weight: 600; color: #333; margin-bottom: 30px;">
                Aqui você aprende que transformação não é força.<br>
                Ela é <strong style="color: var(--brand-purple);">inteligência espiritual em movimento</strong>.
            </p>
            <div style="height: 2px; width: 100px; background: linear-gradient(to right, var(--brand-purple), var(--brand-peach)); margin: 30px auto;"></div>
            <p style="font-size: 1.2rem; color: #666;">
                Não se trata de ativar rápido. Trata-se de <strong>sustentar com maturidade energética</strong> e integrar as mudanças na sua vida cotidiana.
            </p>
        </div>
    </div>
</section>

<!-- SEÇÃO 5: DIFERENCIAIS -->
<section class="section bg-light">
    <div class="site-container">
        <h2 class="text-center mb-20">💎 O Que Torna Este Programa Diferente?</h2>
        <p class="text-center container-small mb-50" style="font-size: 1.2rem; color: #666;">
            Este programa foi criado para romper com excessos, promessas irreais e caminhos desancorados.
        </p>

        <div class="cards-grid">
            <div class="card">
                <span class="card-icon">🎯</span>
                <h3 class="card-title">Método Estruturado</h3>
                <p class="card-text">8 encontros ao vivo com sequência lógica e progressiva de transformação</p>
            </div>
            <div class="card">
                <span class="card-icon">❤️</span>
                <h3 class="card-title">Condução Ética</h3>
                <p class="card-text">Processo amoroso, consciente e respeitoso com seu tempo e sua jornada</p>
            </div>
            <div class="card">
                <span class="card-icon">⚡</span>
                <h3 class="card-title">Energia Sustentada</h3>
                <p class="card-text">Não apenas ativa, mas ensina a sustentar a energia no dia a dia</p>
            </div>
            <div class="card">
                <span class="card-icon">🧘</span>
                <h3 class="card-title">Integração Real</h3>
                <p class="card-text">Técnicas práticas para integrar a transformação em todas as áreas da vida</p>
            </div>
            <div class="card">
                <span class="card-icon">🌱</span>
                <h3 class="card-title">Crescimento Progressivo</h3>
                <p class="card-text">Cada encontro te prepara para o próximo nível de consciência</p>
            </div>
            <div class="card">
                <span class="card-icon">👥</span>
                <h3 class="card-title">Grupo Acolhedor</h3>
                <p class="card-text">Jornada compartilhada com outras almas em despertar</p>
            </div>
        </div>

        <div class="text-center mt-50">
            <p style="font-size: 1.4rem; font-weight: 600; color: #333;">
                Aqui você não aprende apenas a ativar sua energia.<br>
                Você aprende a <strong style="color: var(--brand-purple);">ler, conduzir, integrar e sustentar</strong> sua nova frequência vibracional.
            </p>
        </div>
    </div>
</section>

<!-- SEÇÃO 6: O QUE VAI APRENDER -->
<section class="section bg-white">
    <div class="site-container">
        <h2 class="text-center mb-50">🌀 O Que Você Vai Aprender e Transformar</h2>

        <div class="cards-grid">
            <div class="card" style="border-left-color: var(--brand-purple);">
                <span class="card-icon">🔥</span>
                <h3 class="card-title" style="color: var(--brand-purple);">Despertar da Energia</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>✓ Ativação consciente da Kundalini</li>
                    <li>✓ Expansão da energia vital</li>
                    <li>✓ Abertura de novos níveis de consciência</li>
                    <li>✓ Preparação energética e espiritual</li>
                </ul>
            </div>

            <div class="card" style="border-left-color: var(--brand-teal);">
                <span class="card-icon">🌿</span>
                <h3 class="card-title" style="color: var(--brand-teal);">Limpeza Profunda</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>✓ Radiestesia e limpeza energética</li>
                    <li>✓ Dissolução de bloqueios invisíveis</li>
                    <li>✓ Liberação de medos e traumas</li>
                    <li>✓ Divórcio energético de relações tóxicas</li>
                </ul>
            </div>

            <div class="card" style="border-left-color: var(--brand-peach);">
                <span class="card-icon">✨</span>
                <h3 class="card-title" style="color: var(--brand-dark);">Harmonização Vibracional</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>✓ Reiki e cura energética</li>
                    <li>✓ Restauração do equilíbrio e bem-estar</li>
                    <li>✓ Alinhamento dos chakras</li>
                    <li>✓ Elevação da frequência vibracional</li>
                </ul>
            </div>

            <div class="card" style="border-left-color: var(--brand-purple);">
                <span class="card-icon">🧠</span>
                <h3 class="card-title" style="color: var(--brand-purple);">Reprogramação Mental</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>✓ Quebra de padrões limitantes</li>
                    <li>✓ Dissolução de crenças sabotadoras</li>
                    <li>✓ Afirmações e programação positiva</li>
                    <li>✓ Reconstrução da realidade interna</li>
                </ul>
            </div>

            <div class="card" style="border-left-color: var(--brand-teal);">
                <span class="card-icon">🌸</span>
                <h3 class="card-title" style="color: var(--brand-teal);">Meditações Transformadoras</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>✓ Meditações guiadas profundas</li>
                    <li>✓ Exercícios práticos diários</li>
                    <li>✓ Integração no cotidiano</li>
                    <li>✓ Sustentação da transformação</li>
                </ul>
            </div>

            <div class="card" style="border-left-color: var(--brand-peach);">
                <span class="card-icon">🎯</span>
                <h3 class="card-title" style="color: var(--brand-dark);">Manifestação Consciente</h3>
                <ul style="list-style: none; padding: 0;">
                    <li>✓ Alinhamento com o propósito</li>
                    <li>✓ Manifestação de abundância</li>
                    <li>✓ Clareza e foco espiritual</li>
                    <li>✓ Conexão com a essência verdadeira</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 7: PREÇO -->
<section class="pricing-section section">
    <div class="site-container">
        <h2 class="text-center mb-50" style="color: white;">💫 Investimento na Sua Transformação</h2>

        <div class="pricing-card">
            <h3 style="font-size: 2rem; margin-bottom: 30px;">
                Programa Completo<br>
                <span style="background: linear-gradient(135deg, var(--brand-purple), var(--brand-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Reprogramação da Consciência</span>
            </h3>

            <p class="price-old"><?php echo get_field('preco_antigo') ?: 'De R$ 597,00'; ?></p>
            <p class="price-new"><?php echo get_field('preco_atual') ?: 'R$ 297'; ?></p>
            <p class="price-installment"><?php echo get_field('preco_parcelado') ?: 'ou parcelado no cartão'; ?></p>

            <div style="background: linear-gradient(to right, rgba(160,102,177,0.1), rgba(250,177,120,0.1)); border-radius: 20px; padding: 30px; margin: 30px 0; text-align: left;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                    <div>✔ 8 Encontros ao Vivo pelo Zoom</div>
                    <div>✔ Acesso à Plataforma Hotmart</div>
                    <div>✔ Grupo Exclusivo no WhatsApp</div>
                    <div>✔ Materiais de Apoio Completos</div>
                    <div>✔ Bônus Especiais Inclusos</div>
                    <div>✔ Certificado de Participação</div>
                    <div>✔ Suporte Durante Todo o Processo</div>
                    <div>✔ Vagas Limitadas</div>
                </div>
            </div>

            <div style="background: #FEE2E2; border: 2px solid #DC2626; border-radius: 15px; padding: 20px; margin-bottom: 30px;">
                <p style="color: #DC2626; font-weight: 700; font-size: 1.1rem; margin: 0;">
                    ⚠️ Esta oferta especial pode acabar a qualquer momento
                </p>
            </div>

            <a href="<?php echo esc_url(get_field('hero_btn1_link') ?: 'https://pay.hotmart.com/E97944766B?off=6y9966ug'); ?>" 
               class="btn btn-primary" 
               style="width: 100%; font-size: 1.3rem; padding: 20px;">
                QUERO GARANTIR MINHA VAGA AGORA
            </a>

            <p style="margin-top: 20px; color: #999; font-size: 0.9rem;">
                🔒 Compra 100% Segura • Acesso Imediato • Grupo Exclusivo
            </p>
        </div>
    </div>
</section>

<!-- SEÇÃO 8: SOBRE KELEN -->
<section class="section bg-light">
    <div class="site-container">
        <h2 class="text-center mb-50">👩‍🦋 Quem Te Guia Neste Processo</h2>

        <div class="sobre-grid">
            <div class="sobre-image">
                <?php 
                $sobre_logo = get_field('sobre_logo');
                if ($sobre_logo): 
                ?>
                    <img src="<?php echo esc_url($sobre_logo); ?>" alt="Kelen Silva">
                <?php endif; ?>
                
                <div class="badges">
                    <span class="badge">✨ Guia da Alma</span>
                    <span class="badge">🔥 Mestre Reiki</span>
                    <span class="badge">⚡ Facilitadora Kundalini</span>
                </div>
            </div>

            <div>
                <h3 style="font-size: 2.5rem; margin-bottom: 25px;">
                    <?php echo get_field('sobre_nome') ?: 'Kelen Silva'; ?>
                </h3>
                
                <div style="font-size: 1.1rem; line-height: 1.9; color: #666;">
                    <?php 
                    $sobre_bio = get_field('sobre_bio');
                    if ($sobre_bio) {
                        echo $sobre_bio;
                    } else {
                        ?>
                        <p>Meu nome é <strong>Kelen Silva</strong> e sou <strong>Guia da Alma</strong>, especialista em cura energética, reprogramação da consciência e ativação da Kundalini.</p>
                        
                        <p>Assim como muitas de vocês, vivi transformações profundas. Há alguns anos, deixei para trás uma carreira no jornalismo para seguir um chamado muito mais profundo: auxiliar outras almas a encontrarem seu caminho de volta ao seu verdadeiro propósito.</p>
                        
                        <p>Como Guia da Alma, já tive a honra de transformar centenas de vidas, ajudando pessoas a se reconectarem com sua essência através de práticas como <strong>Reiki, Xamanismo, Radiestesia e Ativação da Kundalini</strong>.</p>
                        
                        <div style="background: white; padding: 25px; border-radius: 20px; border-left: 4px solid var(--brand-purple); margin-top: 30px;">
                            <p style="font-size: 1.2rem; font-weight: 600; margin: 0;">
                                <span style="background: linear-gradient(135deg, var(--brand-purple), var(--brand-dark)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Meu propósito</span> é guiar você no processo de despertar da consciência, utilizando técnicas validadas ao longo de anos de estudo e prática.
                            </p>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <?php 
                $instagram = get_field('sobre_instagram');
                if ($instagram): 
                ?>
                    <p style="margin-top: 30px;">
                        <strong>Instagram:</strong> 
                        <a href="<?php echo esc_url($instagram); ?>" style="color: var(--brand-purple); font-weight: 600;">@kelenguiadaalma</a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 9: DEPOIMENTOS -->
<section class="section bg-white">
    <div class="site-container">
        <h2 class="text-center mb-50">💬 O Que Estão Falando Sobre o Meu Trabalho</h2>

        <div class="depoimentos-grid">
            <div class="depoimento">
                <p class="depoimento-text">
                    "Eu sempre senti que estava presa, incapaz de tomar decisões importantes na minha carreira. A Kelen me ajudou a identificar os padrões que me bloqueavam e, pela primeira vez, consegui avançar com confiança."
                </p>
                <div class="depoimento-author">
                    <div class="depoimento-avatar">👩</div>
                    <div class="depoimento-name">Cristina</div>
                </div>
            </div>

            <div class="depoimento">
                <p class="depoimento-text">
                    "A ansiedade me paralisava e eu sentia que nunca seria suficiente para prosperar no trabalho. Com as técnicas da Kelen, não só consegui controlar meus medos, mas também descobrir meu verdadeiro valor. Sou eternamente grata!"
                </p>
                <div class="depoimento-author">
                    <div class="depoimento-avatar">👩</div>
                    <div class="depoimento-name">Mariana S.</div>
                </div>
            </div>

            <div class="depoimento">
                <p class="depoimento-text">
                    "Achei que viver com essa ansiedade seria para sempre, mas a Kelen me mostrou que há uma saída. Hoje, tenho clareza sobre minhas metas e sei exatamente como atingi-las. Foi uma experiência única e transformadora."
                </p>
                <div class="depoimento-author">
                    <div class="depoimento-avatar">👩</div>
                    <div class="depoimento-name">Juliana Santos</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 10: FAQ -->
<section class="section bg-light">
    <div class="site-container">
        <h2 class="text-center mb-50">❓ Perguntas Frequentes</h2>

        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question">Quanto tempo dura o programa?</div>
                <div class="faq-answer">
                    São 8 encontros ao vivo, realizados uma vez por semana pelo Zoom, além de acesso aos materiais complementares na plataforma Hotmart. O programa completo tem duração de aproximadamente 2 meses.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Preciso ter experiência com espiritualidade?</div>
                <div class="faq-answer">
                    Não! Este programa é para todos - tanto para quem está começando sua jornada de autoconhecimento quanto para quem já está em busca do despertar espiritual. Cada pessoa é guiada de acordo com seu nível de consciência atual.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Terei acesso ao conteúdo depois?</div>
                <div class="faq-answer">
                    Sim! As aulas ficarão gravadas na plataforma Hotmart por 1 ano. Você poderá assistir quantas vezes quiser. No entanto, as práticas energéticas ao vivo são exclusivas dos encontros, pois o campo grupal potencializa a transformação.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Este programa resolve todos os meus problemas?</div>
                <div class="faq-answer">
                    O programa é profundamente transformador e um ponto de partida poderoso para desbloquear padrões e criar novos caminhos. A transformação completa depende do seu comprometimento e continuidade no processo. Muitas pessoas relatam grandes mudanças de percepção já no primeiro encontro, mas a jornada espiritual é contínua.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Como funcionam os encontros ao vivo?</div>
                <div class="faq-answer">
                    Os encontros acontecem pelo Zoom em datas e horários definidos. Durante cada sessão, haverá ensinamentos, práticas energéticas, meditações guiadas e espaço para perguntas. É um momento sagrado de conexão grupal e transformação coletiva.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">E se eu perder algum encontro ao vivo?</div>
                <div class="faq-answer">
                    Não tem problema! Todos os encontros são gravados e ficam disponíveis na plataforma. Porém, recomendamos participar ao vivo sempre que possível, pois a energia do grupo potencializa a experiência de transformação.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">O programa tem garantia?</div>
                <div class="faq-answer">
                    Sim! Você tem 7 dias de garantia incondicional pela Hotmart. Se dentro deste período você sentir que o programa não é para você, basta solicitar o reembolso total.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Quantas pessoas participam do grupo?</div>
                <div class="faq-answer">
                    Mantemos grupos pequenos e íntimos para garantir uma experiência profunda e personalizada. As vagas são limitadas por turma para preservar a qualidade energética do trabalho.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SEÇÃO 11: CTA FINAL -->
<section class="chamado-section section">
    <div class="site-container text-center">
        <h2 style="color: white; font-size: 3rem; margin-bottom: 30px;">🔔 O Renascimento É Um Chamado</h2>

        <div style="max-width: 900px; margin: 0 auto;">
            <p style="font-size: 1.5rem; margin-bottom: 20px; color: white;">
                Chamados não se explicam. Eles se sentem.
            </p>
            <p style="font-size: 1.7rem; font-weight: 600; margin-bottom: 30px; color: white;">
                Se este programa tocou algo em você, confie.
            </p>
            <p style="font-size: 1.4rem; margin-bottom: 50px; color: white;">
                Estar aqui agora não é coincidência.<br>
                <strong style="font-size: 1.8rem;">Esta é a sua oportunidade de transformar sua vida.</strong>
            </p>

            <a href="<?php echo esc_url(get_field('hero_btn1_link') ?: 'https://pay.hotmart.com/E97944766B?off=6y9966ug'); ?>" 
               class="btn btn-secondary" 
               style="font-size: 1.3rem; padding: 20px 50px; margin-bottom: 30px;">
                SIM, QUERO ESSA TRANSFORMAÇÃO AGORA
            </a>

            <p style="color: white; font-size: 1.2rem; margin-bottom: 20px;">ou fale comigo no WhatsApp:</p>

            <a href="<?php echo esc_url(get_field('hero_btn2_link') ?: 'https://wa.me/5551981502140'); ?>" 
               class="btn" 
               style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); color: white; border: 2px solid white;">
                💬 QUERO TIRAR MINHAS DÚVIDAS
            </a>

            <p style="color: rgba(255,255,255,0.9); margin-top: 40px;">
                ⚠️ As vagas são limitadas e esta oferta especial pode acabar a qualquer momento
            </p>
        </div>
    </div>
</section>

<?php get_footer(); ?>

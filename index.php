<?php
/**
 * Main index template.
 */

get_header();

$is_home_view = is_home() || is_front_page();
?>

<?php if ($is_home_view) : ?>
    <section class="jl-hero">
        <div class="jl-container">
            <div class="jl-identity-grid">
                <div class="jl-hero-card">
                    <p class="jl-kicker">Jason Lamb .ME</p>
                    <h1>Helping people with technology, one useful rabbit hole at a time.</h1>
                    <p><?php bloginfo('description'); ?></p>
                    <p class="jl-hero-subline">PowerShell notes, GitHub-backed projects, WordPress experiments, AI tinkering, and practical tech help without the corporate fog machine.</p>

                    <div class="jl-human-note">
                        I like useful tech, weird little projects, readable scripts, and the occasional Comic Sans crime scene.
                    </div>

                    <div class="jl-interest-cloud" aria-label="<?php esc_attr_e('Jason interest tags', 'jl-dark-lab'); ?>">
                        <span>#HelpingPeople</span>
                        <span>#PowerShell</span>
                        <span>#GitHub</span>
                        <span>#AIProjects</span>
                        <span>#WordPress</span>
                        <span>#FunBuilds</span>
                    </div>

                    <div class="jl-terminal-strip">
                        <span>&gt;</span> <code>Help-PeopleWithTech -Tools PowerShell,GitHub,AI,WordPress -Verbose</code>
                    </div>
                </div>

                <aside class="jl-command-panel">
                    <h2>Command Center</h2>
                    <?php get_search_form(); ?>

                    <div class="jl-status-grid">
                        <div class="jl-status-row"><span>Primary mission</span><span>Help people</span></div>
                        <div class="jl-status-row"><span>Favorite shell</span><span>PowerShell</span></div>
                        <div class="jl-status-row"><span>Project storage</span><span>GitHub</span></div>
                        <div class="jl-status-row"><span>Lab mode</span><span>AI + web toys</span></div>
                    </div>
                </aside>
            </div>

            <div class="jl-lane-grid" aria-label="<?php esc_attr_e('Content lanes', 'jl-dark-lab'); ?>">
                <section class="jl-lane-card feature-help"><div class="jl-lane-icon">?</div><h2>Helping Humans</h2><p>Plain-English tech help, practical fixes, and notes written for actual people.</p></section>
                <section class="jl-lane-card feature-powershell"><div class="jl-lane-icon">PS</div><h2>PowerShell</h2><p>Scripts, admin shortcuts, automation patterns, and command-line sanity.</p></section>
                <section class="jl-lane-card feature-github"><div class="jl-lane-icon">GH</div><h2>GitHub Builds</h2><p>Repo-backed tools, project writeups, changelogs, and deployment notes.</p></section>
                <section class="jl-lane-card feature-ai"><div class="jl-lane-icon">AI</div><h2>Fun AI Projects</h2><p>Useful AI experiments, writing tools, automations, and digital tinkering.</p></section>
            </div>

            <section class="jl-personality-card">
                <h2>What this site is supposed to feel like</h2>
                <div class="jl-personality-grid">
                    <div class="jl-personality-item"><strong>Helpful</strong><span>Technology explained like someone actually wants you to succeed.</span></div>
                    <div class="jl-personality-item"><strong>Technical</strong><span>PowerShell, GitHub, WordPress, and experiments with enough detail to be useful.</span></div>
                    <div class="jl-personality-item"><strong>Personal</strong><span>A little typewriter, a little terminal, and just enough Comic Sans to annoy the design police.</span></div>
                </div>
            </section>
        </div>
    </section>

    <main class="jl-main">
        <div class="jl-container">
            <div class="jl-section-heading"><h2>Latest Notes</h2><p>Recent posts from the lab. Less “corporate thought leadership,” more “here is the thing that worked.”</p></div>

            <div class="jl-home-bottom">
                <section class="jl-home-feed">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('jl-home-note'); ?>>
                                <div class="jl-note-date"><strong><?php echo esc_html(get_the_date('d')); ?></strong><?php echo esc_html(get_the_date('M Y')); ?></div>
                                <div>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?></p>
                                    <div class="jl-meta"><?php the_category(', '); ?><?php if (has_tag()) : ?><span> / </span><?php the_tags('', ', ', ''); ?><?php endif; ?></div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                        <div class="jl-pagination"><?php the_posts_pagination(); ?></div>
                    <?php else : ?>
                        <article class="jl-content-card"><h2><?php esc_html_e('Nothing found', 'jl-dark-lab'); ?></h2><p><?php esc_html_e('No posts matched this request.', 'jl-dark-lab'); ?></p></article>
                    <?php endif; ?>
                </section>

                <aside class="jl-project-console">
                    <h2>Project Console</h2>
                    <p><span class="ok">OK</span> Helpful tech notes loaded</p>
                    <p><span class="ok">OK</span> PowerShell lane active</p>
                    <p><span class="ok">OK</span> GitHub project mode enabled</p>
                    <p><span class="ok">OK</span> AI playground online</p>
                    <p><span class="warn">NOTE</span> Comic Sans contained to safe levels</p>
                    <p>&gt; Blog engine: WordPress<br />&gt; Public vibe: Jason<br />&gt; Generic theme smell: reduced</p>
                </aside>
            </div>
        </div>
    </main>
<?php else : ?>
    <main class="jl-main">
        <div class="jl-container jl-layout">
            <section class="jl-post-list">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?><?php get_template_part('template-parts/content', 'card'); ?><?php endwhile; ?>
                    <div class="jl-pagination"><?php the_posts_pagination(); ?></div>
                <?php else : ?>
                    <article class="jl-content-card"><h1><?php esc_html_e('Nothing found', 'jl-dark-lab'); ?></h1><p><?php esc_html_e('No posts matched this request.', 'jl-dark-lab'); ?></p></article>
                <?php endif; ?>
            </section>
            <?php get_sidebar(); ?>
        </div>
    </main>
<?php endif; ?>

<?php get_footer();

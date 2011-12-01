\documentclass[a4paper]{article}
\usepackage{lineno}
\usepackage{ngerman}
\usepackage[utf8]{inputenc}

\begin{document}

\textbf{\huge <?php echo(get_the_title()); ?>}

\textbf{Antragsteller:} <?php echo(get_post_meta(get_the_ID(), 'cvtx_antrag_steller', true)); ?>\\[2em]

\begin{linenumbers}
\modulolinenumbers[5]
<?php echo($post->post_content); ?>\\[2em]
\end{linenumbers}

\textbf{Begründung:}\\
<?php echo(get_post_meta(get_the_ID(), 'cvtx_antrag_grund', true)); ?>

\end{document}
java -jar "compiler.jar" \
  --js=../../js/manic/**.js \
  --js=../../js/kafnu/**.js \
  --js=closure-library/**.js \
  --only_closure_dependencies \
  --compilation_level WHITESPACE_ONLY \
  --closure_entry_point=kafnu.page.Community \
  --externs=closure-externs/jquery-1.9.js \
  --externs=closure-externs/html5.js \
  --externs=closure-externs/window.js \
  --externs=closure-externs/gsap.js \
  --externs=closure-externs/all.js \
  --externs=closure-externs/jquery_plugins.js \
  --externs=closure-externs/scrollmagic.js \
  --externs=closure-externs/new_fullpage.js \
  --externs=closure-externs/others.js \
  --js_output_file=../../js/minified/page-community.min.js
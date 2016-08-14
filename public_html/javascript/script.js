var colors = [
	[0,100,50],
	[113,75,25],
	[240,87,40],
	[328,24,40]
],
	el = document .getElementById('scroll')[0],
	length = colors.length,
	height = math.round(el.offsetHeight / length);

function scroll(){
	var i = Math.floor(el.scroolTop / height),
		d = el.scrollTop % height / height,
		c1 = colors[i],
		c2 = colors[(i+1)%length],
		h = c1[0] + Math.round((c2[0] - c1[0]) * d),
		s = c1[1] + Math.round((c2[1] - c1[1]) * d),
		l = c1[2] + Math.round((c2[2] - c1[2]) * d);
	el.style['background-color'] = ['hsl(', h, ', ', s+'%, ', l, '%)'].join('');
}
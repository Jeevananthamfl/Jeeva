import is from"./is";import{vttToJson}from"./search-vtt";export default function cacheCues(e){var t,i,o,l,n,r;if(!(null===(i=null===(t=null==e?void 0:e.config.preset)||void 0===t?void 0:t.search)||void 0===i?void 0:i.enabled))return;if(!(null===(l=null===(o=null==e?void 0:e.media)||void 0===o?void 0:o.textTracks)||void 0===l?void 0:l.length)||0===(null===(r=null===(n=null==e?void 0:e.media)||void 0===n?void 0:n.textTracks)||void 0===r?void 0:r.length))return;if(-1!==(null==e?void 0:e.currentTrack))return;e.toggleCaptions(!0);let d=setInterval((()=>{var t;const i=null===(t=e.media.textTracks[0])||void 0===t?void 0:t.cues;(null==i?void 0:i.length)>0&&(setCues(e),e.toggleCaptions(!1),clearInterval(d))}),200)}export function getCues(e){if(!e)return;const t=localStorage.getItem("presto-player-"+e.id+"-cues");return is.empty(t)?"":JSON.parse(t)}export function setCues(e){var t,i,o,l,n;if(!e||!(null===(t=null==e?void 0:e.media)||void 0===t?void 0:t.textTracks)||0===(null===(o=null===(i=null==e?void 0:e.media)||void 0===i?void 0:i.textTracks)||void 0===o?void 0:o.length))return;const r=(null===(n=null===(l=null==e?void 0:e.media)||void 0===l?void 0:l.textTracks)||void 0===n?void 0:n[0])?vttToJson(e.media.textTracks[0]):{};is.empty(r)||localStorage.setItem("presto-player-"+e.id+"-cues",JSON.stringify(r))}
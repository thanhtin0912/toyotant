<script type="text/javascript">token_value = '<?=$this->security->get_csrf_hash()?>';</script>
<a class="no_underline" href="javascript:void(0)" onclick="updateStatus(<?=$id?>,<?=$status?>,'<?=$module?>')"><?php ($status==0) ? print '<span class="label label-sm label-default status-blocked">Blocked</span>' : print '<span class="label label-sm label-success status-approved">Approved</span>' ?></a>
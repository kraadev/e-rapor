<script setup>
const router = useRouter()

onMounted(async () => {
  // Redirect to login by default (landing page)
  await router.push('/login')
})
</script>
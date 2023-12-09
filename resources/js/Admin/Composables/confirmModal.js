export function useConfirmModal() {
    const showConfirmModal = () => {
        return confirm('Ви точно хочете видалити цей запис?');
    }

    return { showConfirmModal }
}

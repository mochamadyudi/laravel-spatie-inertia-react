import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import { first } from 'lodash'
export default function Dashboard(props) {
    let { auth } = props
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Test</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12 border border-red-500 h-screen">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900">You're hehe</div>
                        <pre>{JSON.stringify(first(auth.user.roles)?.name === 'super_admin',null,2)}</pre>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
